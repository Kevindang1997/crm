@if($label)
<label @if(isset($label['title'])) for="{{$label['for']}}" @endif>@if(isset($label['title'])) {{$label['title']}} @endif</label>
@endif