<?php
// use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii \helpers\Url;

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php //echo($userName)?>
<!--<br />-->


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <form action="">
        <div class="box">
            <p>请输入您的用户名和密码:</p>
            <div class="input_box">
                <input id="uname" type="text" name="user" placeholder="请输入用户名">
            </div>
            <br/>
            <div class="input_box">
                <input id="upass" type="password" name="psw" placeholder="请输入密码">
            </div>
            <div id="error_box" style="color: red"><br></div>
            <div class="input_box">
                <button type="button" class="btn btn-primary" onclick="fnLogin()">登陆</button>&nbsp&nbsp&nbsp&nbsp
                <a href="regist.php"><input type="button" class="btn btn-info" name="regist" value="注册"></a>
            </div>
        </div>
        <form />



        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 微软雅黑;
                font-size: 15px;
            }
            .box{
                width: 390px;
                height: 320px;
            }

            .input_box{
                width:350px;
                overflow: hidden;
            }
        </style>


        <script type="text/javascript">

            function fnLogin() {
                let oUname = document.getElementById("uname")
                let oUpass = document.getElementById("upass")
                let oError = document.getElementById("error_box")
                let isError = true;
                if (oUname.value.length > 20 || oUname.value.length < 6) {
                    oError.innerHTML = "用户名请输入6-20位字符";
                    isError = false;
                    return;
                }else if((oUname.value.charCodeAt(0)>=48) && (oUname.value.charCodeAt(0)<=57)){
                    oError.innerHTML = "首字符必须为字母";
                    return;
                }else for(let i=0;i<oUname.value.charCodeAt(i);i++){
                    if((oUname.value.charCodeAt(i)<48)||(oUname.value.charCodeAt(i)>57) && (oUname.value.charCodeAt(i)<97)||(oUname.value.charCodeAt(i)>122)){
                        oError.innerHTML = "必须为字母跟数字组成";
                        return;
                    }
                }

                if (oUpass.value.length > 20 || oUpass.value.length < 6) {
                    oError.innerHTML = "密码请输入6-20位字符";
                    isError = false;
                    return;
                }
                window.alert("登录成功")
            }
        </script>

</div>