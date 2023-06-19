@extends('layout/app')
@section('content')
<h1>This is index pages with layout</h1>

{{
    $x = 1;
}}
@if ($x > 2)
    <h4>x lớn hơn y</h4>
@elseif( $x < 10)
<h4>x nhỏ hơn 10</h4>
@endif
@endsection
