<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php include "include/head.php"; ?>
    <title>注册页</title>
</head>
<body>
<?php include "include/navbar.php"; ?>
<div class="container">
    <?php include "include/carousel.html"; ?>
    <ol class="breadcrumb">
        <li><a href="index.php">首页</a></li>
        <li class="active">注册</li>
    </ol>
    <div class="page-header">
        <h2 class="text-muted">用户注册</h2>
    </div>

    <form class="form-horizontal" action="php/validateRegister.php" method="post" id="formRegister">
        <div class="form-group">
            <label for="username1" class="col-md-2 control-label">用户名：</label>
            <div class="col-md-10">
                <input id="username1" name="username1" type="text" value="" placeholder="用户名" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password1" class="col-md-2 control-label">输入密码：</label>
            <div class="col-md-10">
                <input id="password1" name="password1" type="password" placeholder="输入密码" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password2" class="col-md-2 control-label">输出密码：</label>
            <div class="col-md-10">
                <input id="password2" name="password2" type="password" placeholder="确认密码" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email：</label>
            <div class="col-md-10">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-md-2 control-label">手机号：</label>
            <div class="col-md-10">
                <input id="phone" name="phone" type="tel" placeholder="手机号" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-md-2 control-label">地区: </label>
            <div class="col-md-10">
                <!-- <select id="location" class="form-control" name="area">
                    <option value="0">请选择省份</option>
                    <option>山东</option>
                    <option>湖北</option>
                    <option>云南</option>
                    <option>陕西</option>
                </select> -->
                <select id="location" class="form-control" name="area">
                    <option value="0">请选择省份</option>
                    <option value="北京市">北京市</option>
                    <option value="天津市">天津市</option>
                    <option value="河北省">河北省</option>
                    <option value="山西省">山西省</option>
                    <option value="内蒙古自治区">内蒙古自治区</option>
                    <option value="辽宁省">辽宁省</option>
                    <option value="吉林省">吉林省</option>
                    <option value="黑龙江省">黑龙江省</option>
                    <option value="上海市">上海市</option>
                    <option value="江苏省">江苏省</option>
                    <option value="浙江省">浙江省</option>
                    <option value="安徽省">安徽省</option>
                    <option value="福建省">福建省</option>
                    <option value="江西省">江西省</option>
                    <option value="山东省">山东省</option>
                    <option value="河南省">河南省</option>
                    <option value="湖北省">湖北省</option>
                    <option value="湖南省">湖南省</option>
                    <option value="广东省">广东省</option>
                    <option value="广西壮族自治区">广西壮族自治区</option>
                    <option value="海南省">海南省</option>
                    <option value="重庆市">重庆市</option>
                    <option value="四川省">四川省</option>
                    <option value="贵州省">贵州省</option>
                    <option value="云南省">云南省</option>
                    <option value="西藏自治区">西藏自治区</option>
                    <option value="陕西省">陕西省</option>
                    <option value="甘肃省">甘肃省</option>
                    <option value="青海省">青海省</option>
                    <option value="宁夏回族自治区">宁夏回族自治区</option>
                    <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                    <option value="台湾省">台湾省</option>
                    <option value="香港特别行政区">香港特别行政区</option>
                    <option value="澳门特别行政区">澳门特别行政区</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">性别：</label>
            <div class="col-md-10 radio">
                <label><input type="radio" name="sex" value="男">男</label>
                <label><input type="radio" name="sex" value="女">女</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">爱好：</label>
            <div class="col-md-10 checkbox">
                <label><input type="checkbox" name="hobby[]" value="音乐">音乐</label>
                <label><input type="checkbox" name="hobby[]" value="旅游">旅游</label>
                <label><input type="checkbox" name="hobby[]" value="登山">登山</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="assign" id="assign" checked> 阅读并接受
                    </label>
                    <button type="button" class="btn-link" data-toggle="modal" data-target="#myModal">《用户协议》</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">用户协议</h4>
                    </div>
                    <div class="modal-body">
                        优就业是中公教育IT培训品牌，致力于培养面向电商及互联网领域的高端人才，以学员就业为目的，优质就业为宗旨，是一家集互联网营销师、SEO优化师、SEM竞价师、社会化媒体运营师、电商运营师、互联网产品经理、网页设计师、Web前端工程师、PHP工程师、Android工程师、iOS工程师、Java工程师、C/C++工程师、软件测试工程师等课程为一体的IT培训机构。
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" value="注册" class="btn btn-success" id="register">
                <input type="reset" value="重置" class="btn btn-default">
                <a href="login.php" class="btn btn-danger">已有账号，去登录</a>
            </div>
        </div>

    </form>
    <?php include "include/footer.html"; ?>
</div>
<?php include "include/foot_script.html"; ?>
<script src="js/validateRegister.js"></script>
</body>

</html>