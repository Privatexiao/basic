<?php
// use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii \helpers\Url;

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;

?>
<form action="">
    <div id="container" style="width: 400px" align="center">
        <div id="header" style="background-color: aquamarine">
            <h2 align="center">注册</h2>
        </div>
        <div id="content">
            <p align="center">账号:
                <input id="uname" type="text" name="user" placeholder="账号首字符为字母">
            </p>
            <p align="center">密码:
                <input id="upass" type="password" name="psw" placeholder="请输入密码">
            </p>
            <div id="error_box"><br></div>
            <br>

            <button onclick="fnLogin()" class="btn btn-info">注册</button>
        </div>
    </div>
</form>

