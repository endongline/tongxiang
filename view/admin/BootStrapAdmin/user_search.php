<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>BootStrap项目实战</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-maizi.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
</head>
<body>

<!--导航-->
<nav class="navbar navbar-default">
    <div class="container">
        <!--        小屏幕导航按钮和logo-->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">同享发票管理</a>
        </div>
        <!--        小屏幕导航按钮和logo end-->
        <!--     导航   -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;后台首页</a></li>
                <li class="active"><a href="user_list.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理</a></li>
                <li class=""><a href="content.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;内容管理</a></li>
<!--                <li class=""><a href="tag.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;标签管理</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="index.php"><span class=" glyphicon glyphicon-screenshot"></span>&nbsp;&nbsp;前台首页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;个人主页</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;个人设置</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;&nbsp;账户中心</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;我的收藏</a></li>
                    </ul>
                </li>

                <!--                <li class=""><a href="#home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;admin</a></li>-->
                <li class=""><a href="#home"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--导航-->

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="user_list.php" class="list-group-item " >用户管理</a>
                <a href="user_search111.php" class="list-group-item active">用户搜索</a>
                <a href="" class="list-group-item" role="button" data-toggle="modal" data-target="#myModal">添加用户</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="page-header">
                <h1>用户管理</h1>
            </div>
            <ul class="nav nav-tabs">
                <li >
                    <a href="user_list.php">用户列表</a>
                </li>
                <li class="active" >
                <a href="user_search111.php">用户搜索</a>
                </li>
                <li >
<!--                    &lt;!&ndash; Button trigger modal &ndash;&gt;-->
<!--                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
<!--                        Launch demo modal-->
<!--                    </button>-->
                <a href="" role="button" data-toggle="modal" data-target="#myModal">添加用户</a>
                </li>
            </ul>
            <form action="#" class="uesr_search">
                <div class="alert alert-info" role="alert">
                    <strong>技巧提示：</strong>
                    支持模糊搜索和匹配搜索，匹配搜索使用*代替!
                </div>
                <div class="form-group">
                    <label for="name">用户名:</label>
                    <input type="text" id="name" class="form-control" placeholder="请输入用户名">
                </div>
                <div class="form-group">
                    <label for="uid">UID</label>
                    <input type="text" id="uid" class="form-control" placeholder="输入用户UID">
                </div>
                <div class="form-group">
                    <label for="yonghuzu">选择用户组</label>
                    <select name="" id="yonghuzu" class="form-control">
                        <option value="">限制会员</option>
                        <option value="">新手上路</option>
                        <option value="">注册会员</option>
                        <option value="">中级会员</option>
                        <option value="">高级会员</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加用户</h4>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label for="addname">用户名</label>
                        <input type="text" id="addname" class="form-control" placeholder="用户名">
                    </div>
                    <div class="form-group">
                        <label for="addpassword">用户密码</label>
                        <input type="text" id="addpassword" class="form-control" placeholder="请输入用户密码">
                    </div>
                    <div class="form-group">
                        <label for="addpasswordre">确认用户密码</label>
                        <input type="text" id="addpasswordre" class="form-control" placeholder="请确认用户密码">
                    </div>
                    <div class="form-group">
                        <label for="addemail">请输入用户邮箱</label>
                        <input type="text" id="addemail" class="form-control" placeholder="请输入用户邮箱">
                    </div>
                    <div class="form-group">
                        <label for="addyonghuzu">所属用户组</label>
                        <select name="" id="addyonghuzu" class="form-control">
                            <option value="">限制会员</option>
                            <option value="">新手上路</option>
                            <option value="">注册会员</option>
                            <option value="">中级会员</option>
                            <option value="">高级会员</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright&nbsp;©&nbsp;2018-2020&nbsp;&nbsp;www.xxxx.com&nbsp;&nbsp;琼ICP备******号-4
                </p>
            </div>
        </div>
    </div>
</footer>



<!--<script src="js/bootstrap.min.js"></script>-->

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery.singlePageNav.min.js"></script>-->
<!--<script src="js/wow.min.js"></script>-->
</body>
</html>