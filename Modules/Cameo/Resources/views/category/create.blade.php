<?php
use Modules\Cameo\Libs\Fields\InputField;
use Modules\Cameo\Libs\Fields\ButtonField;
use Modules\Cameo\Libs\Fields\EditorField;
use Modules\Cameo\Libs\Fields\DropDownListField;

$input_name = new InputField(
[
    'class'=>'form-control',
    'type'=>'text',
    'name'=>'title',
    'id'=>'title'
],[
    'for'=>'category_title',
    'title'=>__('Category Title:')
]);
$input_name->setFeedback();

$input_description = new EditorField([
    'class'=>'form-control editor-mini',
    'name'=>'description',
    'id'=>'description'
],[
    'for'=>'description',
    'title'=>__('Description')
]);

$input_content = new EditorField([
    'class'=>'form-control editor',
    'name'=>'content',
    'id'=>'content'
],[
    'for'=>'content',
    'title'=>__('Content')
]);

$submit = new ButtonField([
    'type'=>'submit',
    'class'=>'btn btn-primary pull-right'
],__('Save'));

$parent_id = new DropDownListField([
    'class'=>'form-control',
    'name'=>'parent_id',
    'id'=>'parent_id',
],[
    'for'=>'parent_id',
    'title'=>__('Parent Category')
]);
$datas = [
    '0'=>'lorem 0',
    '1'=>'lorem 1',
    '2'=>'lorem 2',
    '3'=>'lorem 3',
    '4'=>'lorem 4',
];
$parent_id->setDatas($datas,3);
$input_seo_title = new InputField(
[
    'class'=>'form-control',
    'type'=>'text',
    'name'=>'seo_title',
    'id'=>'seo_title'
],[
    'for'=>'seo_title',
    'title'=>__('Seo Title:')
]);

$input_seo_description = new EditorField([
    'class'=>'form-control',
    'name'=>'seo_description',
    'id'=>'seo_description'
],[
    'for'=>'content',
    'title'=>__('Seo Description')
]);
$input_seo_keywords = new EditorField([
    'class'=>'form-control',
    'name'=>'seo_keywords',
    'id'=>'seo_keywords'
],[
    'for'=>'seo_keywords',
    'title'=>__('Seo Keywords')
]);
?>
@extends('cameo::layouts.master') 
@section('content')
<div class="row">
	<form action="{{ route('category-store') }}" method="POST">
		@csrf
    	<div class="col-md-8">
        	<div class="box box-primary">
        		<div class="box-header with-border">
        			<h4 class="title">{{ __('Create A New Category Item') }}</h4>
        		</div>
        		<div class="box-body">
    			<?php 
                    $input_name->render();
                    $input_description->render();
                    $input_content->render();
                    $submit->render();
            	?>
        		</div>
        	</div>
    	</div>
    	<div class="col-md-4">
    		<div class="box box-warning">
    			<div class="box-header with-border">
    				<h5 class="title">{{ __('Addition Infomartion') }}</h5>
    			</div>
    			<div class="box-body">
    				<?php $parent_id->render(); ?>
    			</div>
    		</div>
    		<div class="box box-warning">
    			<div class="box-header with-border">
    				<h5 class="title">{{ __('Seo Content') }}</h5>
    			</div>
    			<div class="box-body">
    				<?php 
    				    $input_seo_title->render();
    				    $input_seo_description->render();
    				    $input_seo_keywords->render();
    				?>
    			</div>
    		</div>
    	</div>
	</form>
</div>
@endSection
