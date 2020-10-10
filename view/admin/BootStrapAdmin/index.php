<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>BootStrap项目实战</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-maizi.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all"/>
    <link rel="stylesheet" type="text/css"href="css/bootstrap-theme.css"  media="all">
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
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;后台首页</a></li>
                <li class=""><a href="user_list.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理</a></li>
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
                <li class=""><a href="#home"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--警告框-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4>网站程序有漏洞，急需修复！</h4>
                <p>当前版本程序(V1.22)存在严重安全问题，容易造成攻击，请即可修复！</p>
                <p>
                    <button type="button" class="btn btn-danger">立即修复</button>
                    <button type="button" class="btn btn-default"  data-dismiss="alert"  >稍后处理</button>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">网站数据统计</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>统计项目</th>
                            <th>今日</th>
                            <th>昨日</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">注册会员</td>
                            <td>200</td>
                            <td>400</td>
                        </tr><tr>
                            <td scope="row">登录会员</td>
                            <td>320</td>
                            <td>461</td>
                        </tr><tr>
                            <td scope="row">今日发帖</td>
                            <td>620</td>
                            <td>540</td>
                        </tr><tr>
                            <td scope="row">转载次数</td>
                            <td>620</td>
                            <td>540</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">网站热帖</div>

                    <ul class="list-group">
                       <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>   <li class="list-group-item">
                           <a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;泛Mooc职业教育， 效果和就业为王<small class="pull-right">2015/08/08</small></a>
                       </li>
                    </ul>

            </div>

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">今日访客统计</div>
                <div class="panel-body">
                    <canvas id="canvas" class="col-md-12"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">服务器状态</div>
                <div class="panel-body">
                    <p>内存使用率:40%</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

                        </div>
                    </div>
                    <p>数据库使用率:20%</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">

                        </div>
                    </div>
                    <p>磁盘使用率:60%</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

                        </div>
                    </div>
                    <p>CPU使用率:80%</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">团队留言板</div>
                <div class="panel-body">
                    <div class="col-md-7">
                        <div class="media well">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object wh64" src="images/a.png" alt="小海">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">卓大哥</h4>
                                技术大哥，今晚请把网站程序升级一下哈，现在的系统有漏洞，安全起见！
                            </div>
                        </div>
                        <div class="media well">
                            <div class="media-body text-right">
                                <h4 class="media-heading">技术大哥</h4>
                                收到，今晚凌晨2点准时升级！
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object wh64" src="images/b.png" alt="技术大哥">
                                </a>
                            </div>
                        </div>
                        <div class="media well">
                            <div class="media-body text-right">
                                <h4 class="media-heading">技术大哥</h4>
                                你先在站点发布一下通知哈！
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object wh64" src="images/b.png" alt="技术大哥">
                                </a>
                            </div>
                        </div>
                        <div class="media well">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object wh64" src="images/a.png" alt="卓大哥">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">卓大哥</h4>
                                好嘞。
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="form-group">
                                <label for="text1">留言内容</label>
                                <textarea class="form-control" id="text1" rows="5" cols="10" placeholder="请输入留言内容"></textarea>
                                <button type="submit"class="btn btn-default mar_t15">留言</button>
                            </div>
                        </form>
                        <div class="panel panel-default">
                            <div class="panel-heading">团队联系手册</div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">站长（李小龙):<span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;***-*******&nbsp;</li>
                                    <li class="list-group-item">技术（牛大哥):<span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;***-*******&nbsp;</li>
                                    <li class="list-group-item">站长（李小龙):<span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;***-*******&nbsp;</li>
                                    <li class="list-group-item">站长（李小龙):<span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;***-*******&nbsp;<span class="glyphicon glyphicon-phone-alt"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

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
<!--footer-->
<!--警告框-->
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="view/admin/js/bootstrap.min.js"></script>
<script src="./js/Chart.js"></script>
<script src="view/admin/js/script.js"></script>

</body>
</html>