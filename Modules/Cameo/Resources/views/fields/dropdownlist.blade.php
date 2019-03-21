<?php
extract($params);
?>
<div class="{{$group}}">
	@include('cameo::partials.label',['label'=>$label])
	<select @include('cameo::partials.attrs',['attrs'=>$attrs])>
		@if($nullable)
			<option value="">{{$nullable}}</option>
		@endif
		@if($datas)
			@foreach($datas as $key => $value)
				<option value="{{$key}}" @if($key == $default) selected="selected" @endif>{{$value}}</option>
			@endforeach
		@endif
	</select>
	@if(isset($icon))
	<span class="{{$icon}}"></span>
	@endif
	@if(isset($helpBlock))
	<span class="help-block">{{$helpBlock}}</span>
	@endif
</div>