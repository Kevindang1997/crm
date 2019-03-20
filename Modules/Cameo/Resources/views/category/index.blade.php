<?php
use Modules\Cameo\Libs\Fields\InputField;
?>
@extends('cameo::layouts.master') 
@section('content')
<div class="row">
	<div class="col-md-12">
    	<div class="box box-primary">
    		<div class="box-header with-border">
    			<h4 class="title">Demo Box Primary</h4>
    		</div>
    		<div class="box-body">
    			<?php 
            	   $element = new InputField(
            	       [
            	           'class'=>'form-control',
            	           'type'=>'text'
            	       ],
            	       [
            	           'for'=>'demo_input',
            	           'title'=>'Demo_input'
            	       ]);
            	   $element->setError();
            	   $element->setHelpBlock('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eveniet laboriosam aliquam reprehenderit pariatur ratione cupiditate mollitia laudantium officia molestiae hic minima nemo ipsum nulla sint asperiores placeat ipsa provident.');
            	   $element->render();
            	   
            	?>
    		</div>
    	</div>
	</div>
</div>
@endSection
