<?php 
    extract($params);
?>
<div class="{{$group}}">
	@include('cameo::partials.label',['label'=>$label])
	<textarea @include('cameo::partials.attrs',['attrs'=>$attrs])>@if(isset($value)) {!! $value !!} @endif</textarea>
	@if(isset($icon))
	<span class="{{$icon}}"></span>
	@endif
	@if(isset($helpBlock))
	<span class="help-block">{{$helpBlock}}</span>
	@endif
	
</div>
