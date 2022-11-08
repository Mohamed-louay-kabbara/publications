<!DOCTYPE html>
<head>
<title></title>
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
width: 100%;
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
    <td> الصورة</td>
<th>النص</th>
<th>اعادة</th>
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
</div>
</td>
<td> <?php echo e($p->like); ?> </td>
<td class="actions" data-th="" style="width:10%;">
<a href="<?php echo e(route('rel',$p->id)); ?>">
<button class="btn btn-info btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</button>
</a>
<form action="<?php echo e(route('post.delete',$p->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
</form>
</td>
<form action="<?php echo e(route('fdelete',$p->id)); ?>"method="post">
<?php echo csrf_field(); ?>
        <td class="actions" data-th="" style="width:10%;">
<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
</form>
</td>
<td>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
<?php /**PATH C:\Users\user\Desktop\mora\resources\views/shPost.blade.php ENDPATH**/ ?>