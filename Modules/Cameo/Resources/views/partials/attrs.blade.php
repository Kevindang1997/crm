@if($attrs)
	@foreach($attrs as $key => $value)
		{{$key}} = "{{$value}}" 
	@endforeach
@endif