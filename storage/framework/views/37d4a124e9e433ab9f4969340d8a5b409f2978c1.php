
<html>
<head>
<title>عرض منشوراتي</title>

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
<a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info">العودة الى الصفحة الرئيسية</a>
<div class="row">
<div class="col-lg-12 pb-2">
</div>
<div class="col-lg-12 pl-3 pt-3">
<table class="table table-hover border bg-white">
<thead>
<tr>
<th>الموضوع</th>
<th>عدد الاعجابات</th>
<th>التعليقات</th>
<th>تعديل</th>
<th>حذف</th>
</tr>
</thead>
<tbody>
<tr>
<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<td>
<div class="row">
<div class="col-lg-2 Product-img">
<img class="card-img-top" src="<?php echo e(asset('imgs/'.$p->picture)); ?>">
</div>
<div class="col-lg-10">
<h4 class="nomargin"><?php echo e($p->title); ?></h4>
<p><?php echo e($p->body); ?></p>
</div>
</td>
<td>
<div class="col-lg-10">
<h4 class="nomargin"><?php echo e($p->like); ?></h4>
<h4 class="nomargin"></h4>
     </td>
     <td class="actions" data-th="" style="width:10%;">
<a href="<?php echo e(route('posts.comment',$p->id)); ?>">
<button class="btn btn" style="background:green;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffff" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
        </svg>
</button>
</td>
<td class="actions" data-th="" style="width:10%;">
<a href="<?php echo e(route('posts.edit',$p->id)); ?>">
<button class="btn btn-info btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20"  fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</button>
</td>


<td class="actions" data-th="" style="width:10%;">
<form action="<?php echo e(route('post.delete',$p->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit"style="background:red;"class="btn btn">
    <i class="fa fa-trash-o"></i>
</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div><?php /**PATH C:\Users\user\Desktop\mora\resources\views/Mypost.blade.php ENDPATH**/ ?>