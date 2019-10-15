<?php function block($template,$vars){

    foreach ($vars as $key => $value) {
        $$key=$value;
    }
    include __DIR__.'/templates/'.$template.'.php';

}

if(!function_exists('get_search_form')){
    function get_search_form(){
        include __DIR__.'/search.php';
    }


}
