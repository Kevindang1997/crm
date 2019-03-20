<?php 
    extract($params);
?>
<button @include('cameo::partials.attrs',['attrs'=>$attrs])>{{ $label }}</button>