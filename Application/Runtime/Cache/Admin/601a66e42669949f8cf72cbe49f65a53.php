<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <title>Tables</title>
        <!-- Bootstrap -->
        <link href="/mybackoffice/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/mybackoffice/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="/mybackoffice/Public/assets/styles.css" rel="stylesheet" media="screen">
        <link href="/mybackoffice/Public/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="/mybackoffice/Public/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php echo W('Menu/menu');?> 
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->                

                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">增加管理员</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" method='post' action=''>
                                      <fieldset>
                                        <input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">用户名</label>
                                          <div class="controls">
                                            <input class="input-xlarge "  <?php if($operation==='update'): ?>disabled=''<?php endif; ?> value='<?php echo ($data["name"]); ?>' name='name' id='focusedInput' value='<?php echo ($data["name"]); ?>' type="text" placeholder='用户名为最多16位英文字符'>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="password">密码</label>
                                          <div class="controls">
                                            <input class="input-xlarge" id='password' name='password' type="password" placeholder="密码为16位字符，可包括数字字母和下划线">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="password2">再次输入密码</label>
                                          <div class="controls">
                                            <input class="input-xlarge" id='password2' name='password2' type="password" placeholder="密码为16位字符，可包括数字字母和下划线">
                                          </div>
                                        </div>
<!--                                        <div class="control-group success">
                                          <label class="control-label" for="admintype">类型</label>
                                          <div class="controls">
                                            <select id="admintype">
                                              <option>请选择类型</option>  
                                              <option value='1'>1</option>
                                              <option value='2'>2</option>
                                              <option value='3'>3</option>
                                              <option value='4'>4</option>
                                              <option value='5'>5</option>
                                            </select>
                                            <span class="help-inline">Woohoo!</span>
                                          </div>
                                        </div>-->
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="/mybackoffice/Public/vendors/jquery-1.9.1.js"></script>
        <script src="/mybackoffice/Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/mybackoffice/Public/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/mybackoffice/Public/assets/scripts.js"></script>
        <script src="/mybackoffice/Public/assets/DT_bootstrap.js"></script>
        
    </body>

</html>