<!DOCTYPE html>
<html lang="en">
<head>
    <title>اضافة تعليق</title>
    <style>
        button{
            background:#09bcf3;
            color:#fff;
        }
        h3{
            text-align:center;
        }
        </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="<?php echo e(route('comm')); ?>"method="post">
    <?php echo csrf_field(); ?>
    <h3> ماهو رائيك بمنشور <?php echo e($post->title); ?>؟</h3>
    <input type="text" name="id" value="<?php echo e($post->id); ?>" hidden>
    <br>
    <br><br><br>
<div class="input-group mt-5 text-center sub-input mt-1 ml-auto mr-auto mt-6">
												<input type="text" class="form-control input-lg " placeholder="Enter your Comment" name="comment">
												<div class="input-group-append">
													<button type="submit" class="btn btn-danger-gradient btn-lg br-tr-3  br-br-3">
														send
													</button>
												</div>
											</div>
    </form>
                                        </body>
</html><?php /**PATH C:\Users\user\Desktop\mora\resources\views/comment.blade.php ENDPATH**/ ?>