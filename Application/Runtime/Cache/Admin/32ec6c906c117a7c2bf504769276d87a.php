<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="/mybackoffice/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/mybackoffice/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/mybackoffice/Public/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="/mybackoffice/Public/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" method="post" action="" id="loginform">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name='user' class="input-block-level" placeholder="Email address">
        <input type="password" name='password' class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <script src="/mybackoffice/Public/vendors/jquery-1.9.1.min.js"></script>
    <script src="/mybackoffice/Public/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            var submit = 0;
           $('#loginform').submit(function(){
               if(submit === 0){
                   submit = 1;
                    $.post('<?php echo U('Login/Index');?>',$(this).serialize(),function(result){
                        if(result.errno === '0'){
                            window.location.href = '<?php echo U('Index/Index');?>';
                        }
                        submit = 0;
                    },'json');                     
               }
 
            return false;
           }); 
        });
    </script>
  </body>
</html>