<!-- App css -->
{{-- assets\css\app.min.css
{{ URL::asset(''); }} --}}
<link href="{{URL::asset('assets\css\bootstrap.min.css');}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
<link href="{{ URL::asset('assets\css\icons.min.css'); }}" rel="stylesheet" type="text/css">
{{-- <link href="{{ URL::asset('assets\css\app.min.css'); }}" rel="stylesheet" type="text/css" id="app-stylesheet"> --}}

@if ( strcmp($css_js_head_key, 'all') ==0 )
<link href="{{ URL::asset('assets\css\app.min.css'); }}" rel="stylesheet" type="text/css" id="app-stylesheet">
@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.css" 
integrity="sha512-otyZKuy0m2Vb2a/PvF29koS+TY1OB06a7YrE0Fvajv3L2crkLNNoxviT294+22mjLhWZ3z/Yb+vIy3ohjYP7Rg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.js" 
integrity="sha512-2BUycWdeQIwVF7Gv5L+er+WVgAdRUAMnpZVKax2TJYMNmEWPOJjD6Utp0PiHdmtV7lrAQreVF0i7C+yIef2raQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>