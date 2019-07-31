@section('content1')
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
          data-toggle="collapse" data-target="#navbar" 
          aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Laracarte</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li><a class=" {{root_active('root_path')}} "
           href=" {{route('root_path')}} ">Home</a></li>
            <li class=" {{root_active("about_path")}} "><a href="{{route('about_path')}}">About</a></li>
            <li><a href="#">Artisan</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
               role="button" aria-haspopup="true"
                aria-expanded="false">planet
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <ul class= "nav navbar-nav navbar-right">
                 <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                
                </ul>
          </ul>
          
        </div>
        
      </div>
    </nav>
    @stop
