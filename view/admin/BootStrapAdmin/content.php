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
                <li class=""><a href="user_list.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户管理</a></li>
                <li class="active"><a href="content.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;内容管理</a></li>
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
                <a href="content.php" class="list-group-item active">内容管理</a>
                <a href="content_post.php" class="list-group-item">添加内容</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="page-header">
                <h1>内容管理</h1>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="content.php">内容管理</a>
                </li>
                <li>
                    <a href="content_post.php">添加内容</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                <tr>
                    <th>订单编号</th>
                    <th>开票日期</th>
                    <th>开票人</th>
                    <th>客户</th>
                    <th>余额</th>
                    <th>识别号</th>
                    <th>开户行</th>
                    <th>开票金额</th>
                    <th>操作员</th>
                </tr>
                </thead>
                <tbody>
                <tr style="text-align: center">
<!--                    <th scope="row">泛Mooc职业教育， 效果和就业为王</th>-->
                    <td>01</td>
                    <td>2020/06/18</td>
                    <td >王海路</td>
                    <td>湖北武汉翔程|任何君（全）</td>
                    <td ><strong >256600</strong></td>
                    <td>ZSD123456789</td>
                    <td>古地磁场霏霏霏霏霏霏霏霏</td>
                    <td><address>25000</address></td>
                    <td>王海路</td>
<!--                    <td>-->
<!--                        <a href='#' title='查看订单' class='link_icon' target='_blank'>&#118;</a>-->
<!--                        <a href='#' title='删除' class='link_icon'>&#100;</a>-->
<!--                    </td>-->
                    <td>
                        <div role="presentation" class="dropdown">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                操作<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">编辑</a></li>
                                <li><a href="#">删除</a></li>
                                <li><a href="#">全局置顶</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <th scope="row">产品经理常犯的7大错误，你造吗？</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">如何正确使用python日志系统</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">C语言const修饰符的怎么使用？</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">Android开发用onCreateOptionsMenu()如何创</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">怎样才能成为优秀的iOS开发工程师</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">Android今年推出了些什么新技术？</th>-->
<!--                    <td>朱朝兵</td>-->
<!--                    <td>2015/08/08</td>-->
<!--                    <td>-->
<!--                        <div role="presentation" class="dropdown">-->
<!--                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                操作<span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">编辑</a></li>-->
<!--                                <li><a href="#">删除</a></li>-->
<!--                                <li><a href="#">全局置顶</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                </tr>-->
                </tbody>
            </table>
            <nav class="pull-right">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2 </a></li>
                    <li><a href="#">3 </a></li>
                    <li><a href="#">4 </a></li>
                    <li><a href="#">5 </a></li>
                    <li><a href="#">6 </a></li>
                    <li><a href="#"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
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

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>