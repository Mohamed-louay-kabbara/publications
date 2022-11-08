
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
<a href="<?php echo e(route('mypost')); ?>" class="btn btn-info">الرجوع الى الخلف</a>
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
<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<td>
<div class="row">
<div class="col-lg-10">
<h4 class="nomargin"><?php echo e($p->comment); ?></h4>
</div>
</td>
<td>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($p->user_id==$u->id): ?>
 
<div class="col-lg-10">
<h4 class="nomargin"><?php echo e($u->name); ?></h4>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </td>
<form action="<?php echo e(route('post.comment',$p->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<td class="actions" data-th="" style="width:10%;">
<button type="submit" class="btn btn" style="background:red;">
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
</div><?php /**PATH C:\Users\user\Desktop\mora\resources\views/showcomments.blade.php ENDPATH**/ ?>