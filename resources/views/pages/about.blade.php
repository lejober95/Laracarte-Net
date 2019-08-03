@extends('layouts.default',['title'=>'about'])
<html>
<head>
</head>

<body>
@section('content')
<div class="container">
<h1> This is {{config('app.name')}}..</h1>
<p> This is made. {{config('app.name')}} is a closure of 
   <a href='https://github.com/lejober95/Laracarte-Net'>
{{config('app.name')}}.com
</a></p>
<div class="row">
<div class="col-sm-6">
<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i>
This app has been built by Ybobi
</div>
</div>

</div>
</div>
@stop


</body>
</html>