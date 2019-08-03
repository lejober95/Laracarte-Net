<?php
if(!function_exists("page_title")){

    
    function page_title($title){
        $page_title="Laracarte List of artisan";
        if($title===" "){
            return  "$page_title";
        }else{
            return $title.'|'.$page_title;
        }
    }
  
}
if(!function_exists("root_active")){
    function root_active($root){
        

return Route::is($root)?  'active' : '';
        
    }
}

?>