
<html>
<head>
<title>عرض التعليقات</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<style>
    body{
background-color: #f5f5f5;
}
.Product-img img{
width: 90%;
height: 130px; ;
}
.main-section{
font-family: 'Roboto Condensed', sans-serif;
margin-top:100px;
}
</style>
<body>
<div class="container main-section">
<a href="{{route('mypost')}}" class="btn btn-info">الرجوع الى الخلف</a>
<div class="row">
<div class="col-lg-12 pb-2">
</div>
<div class="col-lg-12 pl-3 pt-3">
<table class="table table-hover border bg-white">
<thead>
<tr>
<th>التعليق</th>
<th>اسم</th>
<th>حذف</th>
</tr>
</thead>
<tbody>
<tr>
@foreach($comment as $p)
<td>
<div class="row">
<div class="col-lg-10">
<h4 class="nomargin">{{$p->comment}}</h4>
</div>
</td>
<td>
@foreach($users as $u)
@if($p->user_id==$u->id)
 
<div class="col-lg-10">
<h4 class="nomargin">{{$u->name}}</h4>
@endif
    @endforeach
     </td>
<form action="{{route('post.comment',$p->id)}}" method="post">
@csrf
@method('DELETE')
<td class="actions" data-th="" style="width:10%;">
<button type="submit" class="btn btn" style="background:red;">
    <i class="fa fa-trash-o"></i>
</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>