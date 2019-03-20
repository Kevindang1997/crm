<?php
use Modules\Cameo\Libs\Fields\InputField;
use Modules\Cameo\Libs\Fields\ButtonField;
?>
@extends('cameo::auth.master')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('login') }}">
    	@csrf
      <div class="form-group has-feedback">
      	<?php 
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
      	     if($errors->has('email')){
      	         $email->setHelpBlock($errors->first('email'));
      	         $email->setError();
      	     }
      	     $email->render();
      	?>
      </div>
      <div class="form-group has-feedback">
      	<?php 
      	     $password = new InputField([
      	         'type'  => 'password',
      	         'name'  => 'password',
      	         'id'    => 'id',
      	         'class' => 'form-control',
      	         'placeholder'=>'Input Password',
      	         'value'=>'',
      	         'required'=>'required'
      	     ]);
      	     $password->setIcon('glyphicon glyphicon-lock form-control-feedback');
      	     if($errors->has('password')){
      	         $email->setHelpBlock($errors->first('password'));
      	         $email->setError();
      	     }
      	     $password->render();
      	?>
      </div>
      <div class="row">
        <div class="col-xs-push-8 col-xs-4">
        	<?php 
        	   $submit = new ButtonField([
        	       'type'=>'submit',
        	       'name'=>'sign_in',
        	       'id'=>'sign_in',
        	       'class'=>'btn btn-primary btn-block btn-flat'
        	   ],'Sign In');
        	   $submit->render();
        	?>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
@endsection
