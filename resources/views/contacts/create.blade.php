@extends('layouts.default',['title'=>'contacts'])
@section('content')
<div class="container">
<h2>Contacts</h2>
<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
<h2>Get in touch</h2>
<p><b class="text-muted">if you get traouble with it ask for 
help</b><a href=" mailto:lejoberdunet@gmal.com " >MyGithubCount</a></p>

    
<form action="#" method="GET">
<div class="form-group">
<label   for="name" class="control-label">Name</label>
<input type="text" id="name" class="form-control" name="name"
 required="required" id="name">
    </div>

    <div class="form-group">
<label for="email" class="control-label">Mail</label>
<input type="email"  id="email" name="email" class="form-control"
 required="required">
    </div>

    <div class="form-group">
 <label for="message" class="control-label sr-only">Message</label>  
 <textarea name="message " id="message" rows="10" cols="10"
  class="form-control " required="required"></textarea>
    </div>
            <div class="form-group">
   
    <button type="submit" class="btn btn-primary btn-block" 
    name="send" > Submit requiry &raquo;</button> 
            </div>

</form>
</div>


</div>

</div>

@stop