<!DOCTYPE html>
<html lang="en">
<head>
    <title>الصفحة الرئيسية</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<style>
    body{
margin-top: 50px;
background-color: #f1f1f1;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
background-color: #17A2B8;
}
.dropdown-menu{
top: 60px;
right: 0px;
left: unset;
width: 460px;
box-shadow: 0px 5px 7px -1px #c1c1c1;
padding-bottom: 0px;
padding: 0px;
}
.dropdown-menu:before{
content: "";
position: absolute;
top: -20px;
right: 12px;
border:10px solid #343A40;
border-color: transparent transparent #343A40 transparent;
}
.head{
padding:5px 15px;
border-radius: 3px 3px 0px 0px;
}
.footer{
padding:5px 15px;
border-radius: 0px 0px 3px 3px;
}
.notification-box{
padding: 10px 0px;
}
.bg-gray{
background-color: #eee;
}
@media (max-width: 640px) {
.dropdown-menu{
top: 50px;
left: -16px;
width: 290px;
}
.nav{
display: block;
}
.nav .nav-item,.nav .nav-item a{
padding-left: 0px;
}
.message{
font-size: 13px;
}
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
<nav class="navbar navbar-expand-lg bg-info rounded">
<a class="navbar-brand text-light" href="#"><?php echo e(auth()->user()->name); ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
<ul class="nav nav-pills mr-auto justify-content-end">
<li class="nav-item active">
<a class="nav-link text-light" href="<?php echo e(route('editpro',auth()->user()->id)); ?>">  تعديل الملف الشخصي <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
<a class="nav-link text-light" href="<?php echo e(route('addpost')); ?>"> اضافة منشور <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="<?php echo e(route('mypost')); ?>">عرض منشوراتي</a>
</li>
<li class="nav-item">
<form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'class' => 'nav-link text-light','onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'class' => 'nav-link text-light','onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']); ?>
                        <?php echo e(__('Log Out')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </form>
</li>
<li class="nav-item dropdown">
<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-bell"></i>
</a>
<ul class="dropdown-menu">
<li class="head text-light bg-dark">
<div class="row">
<div class="col-lg-12 col-sm-12 col-12">
<span>Notifications (<?php echo e(Auth::User()->unreadNotifications->count()); ?>)</span>
<a href="<?php echo e(route('notifRead')); ?>" class="float-right text-light">Mark all as read</a>
</div>
</li>
<li class="notification-box">
<?php $__currentLoopData = Auth::User()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
<div class="col-lg-3 col-sm-3 col-3 text-center">
<img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
</div>
<div class="col-lg-8 col-sm-8 col-8">
<strong class="text-info"><?php echo e($Notification->data['user_name']); ?></strong>
<div>
    <a href="<?php echo e(route('showNot',$Notification->data['post_id'])); ?>">
<?php echo e($Notification->data['title']); ?>

</a>
</div>
<small class="text-warning"><?php echo e($Notification->created_at); ?></small>
</div>
</div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
</nav>
</div>
</div>
</div>
</body>
</html>
<br></br>
<html>
    <head>
        <style>
            #im{
            height:200px;
            width:280px;
            }

        </style>
    </head>
    <div class="container">
                    <div class="row">
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                        <img class="card-img-top" id="im"  src="<?php echo e(asset('imgs/'.$p->picture)); ?>">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <?php $likeyes=1;?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($p->user_id==$u->id): ?>
                                    <label> الاسم</label>
                                    <h6 class="card-title"><?php echo e($u->name); ?></h6>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <label> العنوان</label>
                                    <h5 class="card-title"> <?php echo e($p->title); ?> </h5>
                                    <label> النص</label>
                                    <h6 class="card-title"><?php echo e($p->body); ?> </h6>
                                    <br>
                                    <?php $__currentLoopData = $like; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($li->post_id==$p->id): ?>
                                    <?php if($li->user_id==auth()->user()->id): ?>
                                   <input type="hidden" name="" value="<?php echo e($likeyes=2); ?>">  
                                    <a href="<?php echo e(route('entshere', $p->id)); ?>" class="btn btn-info" style="background:red;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                  </svg>
                                   </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php if($likeyes==1): ?>
                                    <a href="<?php echo e(route('shere', $p->id)); ?>" class="btn btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                  </svg><?php echo e($p->like); ?>

                                   </a>
                                    <?php endif; ?>
                   <a href="<?php echo e(route('comment',$p->id)); ?>" class="btn btn" style="background:green;">                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffff" class="bi bi-chat-dots" viewBox="0 0 16 16">
                   <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                  </svg>
                 </a>
        
                              </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
</html><?php /**PATH C:\Users\user\Desktop\mora\resources\views/post.blade.php ENDPATH**/ ?>