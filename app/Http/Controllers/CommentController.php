<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users=User::all();
        $comment = DB::table('comments')->where('post_id', $id)->get();
        return view('showcomments', compact('comment','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        comment::create([
            'comment'=>$request->comment,
            'user_id'=>Auth::id(),
            'post_id'=>$request->id,
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= DB::table('users')->where('id', Auth::id())->first();
        $pass=Hash::make($user->password);
        return view('editprofile',compact('user','pass'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $pass=User::findorfail($id);
       if($pass->password==$request->password){
       $password1=$request->password;
       }
       else{ 
        $password1=Hash::make($request->password);
        }
        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$password1,
        ]);
        return redirect()->route('dashboard');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        comment::findorfail($id)->delete();
        return redirect()->back();
    }
}
