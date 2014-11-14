<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
    <!-- START panel-->
    <div data-toggle="play-animation" data-play="zoomIn" data-offset="0" data-duration="300" class="panel panel-default panel-flat">
        <p class="text-center mb-lg">
            <br>
            <a href="#">
                <img src="static/backend/img/logo3.png" alt="Image" class="block-center img-rounded">
            </a>
        </p>
        <p class="text-center mb-lg">
            <strong>SIGN IN TO CONTINUE.</strong>
        </p>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'mb-lg']); ?>
                <div class="text-right mb-sm"><a href="#" class="text-muted">Need to Signup?</a>
                </div>
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Enter Email']) ?>
                    <span class="fa fa-envelope form-control-feedback text-muted"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>
                    <span class="fa fa-lock form-control-feedback text-muted"></span>
                </div>
                <div class="clearfix">
                    <div class="checkbox c-checkbox pull-left mt0">
                            <input type="hidden" name="LoginForm[rememberMe]" value="0">
                            <input type="checkbox" name="LoginForm[rememberMe]" value="1">
                            <span class="fa fa-check"></span>Remember Me</label>
                    </div>
                    <div class="pull-right"><?= Html::a('Forget your password?', ['site/request-password-reset'], ['class'=>'text-muted']) ?>
                    </div>
                </div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!-- END panel-->
</div>