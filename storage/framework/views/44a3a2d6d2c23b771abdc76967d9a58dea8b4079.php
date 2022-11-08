<!DOCTYPE html>
<html>
  <head>
    <title> أضافة منشور  </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      direction:rtl ;
      }
      input, textarea {
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #09bcf3;
      }
      h1 { font-size:30px;
      margin-top: 0;
      font-weight: 500;
      text-align: center;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
        background: #09bcf3;
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea,select {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
      .form-inner textarea {

      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid #09bcf3;
      background: #09bcf3;
            font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #09bcf3;
      }
      /* @media (min-width: 568px) */
      form {
      width: 60%;
      }
      p{font-size:20px;}
    </style>
  </head>
  <body>
    <form action="<?php echo e(route('post.store')); ?>" method="post" class="decor" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">

                  <h1>إضافة منشور جديدة</h1>
                  <p>العنوان </p>
                  <input type="text" name="title">
                  <p>نص </p>
                  <textarea name="body" rows="8" cols="400"></textarea>
                    <input type="file" name="picture">
                    <button type="submit">إضافة</button>
      </div>
    </form>
  </body>
</html>
<?php /**PATH C:\Users\user\Desktop\mora\resources\views/addpost.blade.php ENDPATH**/ ?>