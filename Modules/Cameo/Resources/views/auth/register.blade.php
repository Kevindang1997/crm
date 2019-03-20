<?php
use Modules\Cameo\Libs\Fields\InputField;
use Modules\Cameo\Libs\Fields\ButtonField;
/**
 * @var $errors
 */
$name = new InputField([
    'type'=>'text',
    'name'=>'email',
    'id'=>'email',
    'placehoder'=>'Input Name',
    'class'=>'form-control',
    'value'=>'',
    'required'=>'required',
]);
$name->setIcon('glyphicon glyphicon-user form-control-feedback');
$name->setFeedback();
if($errors->has('name')){
    $email->setHelpBlock($errors->first('name'));
    $email->setError();
}

$email = new InputField([
    'type'=>'email',
    'name'=>'email',
    'id'=>'email',
    'placehoder'=>'Input Email',
    'class'=>'form-control',
    'value'=>'',
    'required'=>'required'
]);
$email->setIcon('glyphicon glyphicon-envelope form-control-feedback');
$email->setFeedback();
if($errors->has('email')){
    $email->setHelpBlock($errors->first('email'));
    $email->setError();
}

$password = new InputField([
    'type'=>'password',
    'name'=>'email',
    'id'=>'email',
    'placehoder'=>'Input Email',
    'class'=>'form-control',
    'value'=>'',
    'required'=>'required'
]);
$password->setIcon('glyphicon glyphicon-lock form-control-feedback');
$password->setFeedback();
if($errors->has('password')){
    $email->setHelpBlock($errors->first('password'));
    $email->setError();
}

$repassword = new InputField([
    'type'=>'password',
    'name'=>'email',
    'id'=>'email',
    'placehoder'=>'Input Email',
    'class'=>'form-control',
    'value'=>'',
    'required'=>'required'
]);
$repassword->setIcon('glyphicon glyphicon-log-in form-control-feedback');
$repassword->setFeedback();
if($errors->has('repassword')){
    $email->setHelpBlock($errors->first('repassword'));
    $email->setError();
}

$submit = new ButtonField([
    'type'=>'submit',
    'name'=>'register',
    'id'=>'sign_in',
    'class'=>'btn btn-primary btn-block btn-flat'
],'Register');
?>
@extends('cameo::auth.master')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{ route('register') }}" method="post">
    	@csrf
      <?php 
          $name->render();
          $email->render();
          $password->render();
          $repassword->render();
      ?>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-push-8 col-xs-4">
          <?php $submit->render(); ?>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
