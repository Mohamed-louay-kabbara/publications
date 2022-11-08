<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\createpost;

class PostController extends Controller
{
    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit', compact('post'));
        //حطينا كومباكت بشان وقت يروح ع صفحة التعديل بنفسالوقت يجيب بيانات الوست يلي بدي عدلو
    }
    public function like($id)
    {
       $i=DB::table('posts')->where('id', $id)->first();
        DB::table('posts')->where('id', $id)->update([
            'like' => $i->like+1,
        ]);
        DB::table('likes')->insert([
            'post_id'=>$id,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->back();
    }
    public function notlike($id)
    {
       $i=DB::table('posts')->where('id', $id)->first();
        DB::table('posts')->where('id', $id)->update([
            'like' => $i->like-1,
        ]);
        DB::table('likes')->where('post_id',$id)->where('user_id',Auth::id())->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        // $image=$request->file('picture')->getClientOriginalName();
        // $path= $request->file('picture')->storeAs('posts',$image,'imges');
        DB::table('posts')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            // 'picture'=>$path,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('mypost');
    }
    public function create()
    {
        return view('addpost');
    }
    public function index(){
              
        $post=DB::table('posts')->where('user_id',auth()->user()->id)->get();
        return view('Mypost',compact('post'));
    }
    public function indexposts(){
        $like=DB::table('likes')->get();
        $users=User::all();
        $post=DB::table('posts')->where('user_id','!=',auth()->user()->id,)->get();
        return view('post',compact('post','users','like'));
    }
    public function show($id)
    {
        $index=post::findorfail($id);
        return view('showpost',compact('index'));
    }
    public function showNot($id)
    {
        $like=DB::table('likes')->get();
        $users=User::all();
        $p=post::findorfail($id);
        $getID=DB::table('notifications')->where('data->post_id',$id)->pluck('id');
        DB::table('notifications')->where('id',$getID)->update(['read_at'=>now()]);
        return view('shownotifications',compact('p','users','like'));
    }
    public function store(Request $request)
    {
        $image=$request->file('picture')->getClientOriginalName();
        $path= $request->file('picture')->storeAs('posts',$image,'imges');
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $posts=new post();
        $posts->title=$request->input('title');
        $posts->body=$request->input('body');
        $posts->picture=$path;
        $posts->user_id=Auth::id();
        $posts->save();
        $users=User::where('id','!=',auth()->user()->id)->get();
        $user_name=auth()->user()->name;
        Notification::send($users,new createpost($posts->id,$user_name,$posts->title));
            return redirect()->route('mypost');
        }
        // public function forcedelete($id)
        // {
        //     post::withTrashed()->where('id',$id)->forcedelete();
        //     return redirect()->back();

        // }
        public function destroy($id)
        {
            post::findorfail($id)->delete();
           return redirect()->back();
        }
        public function comment($id){
            $post=post::findorfail($id);
            return view('comment',compact('post'));
        }
        public function showPost()
        {
            $post=post::onlyTrashed()->where('id',Auth::id())->get();
            return view('shPost',compact('post'));
        }
        public function restore($id){
            post::withTrashed()->where('id',$id)->restore();
            $post=post::all();
            return view('post',compact('post'));
        }
        public function notifRead(){
            $user=User::find(auth()->user()->id);
            foreach($user->unreadNotifications as $notifications){
                //بس اخفاء الاشعارات مابينحذف بالقاعدة
                $notifications->markAsRead();
                // حذف نهائي من القاعدة
                // $notifications->delete();
            }
            return redirect()->back();
        }
    }
