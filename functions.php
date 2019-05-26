<?php function block($template,$vars){

    foreach ($vars as $key => $value) {
        $$key=$value;
    }
    include __DIR__.'/templates/'.$template.'.php';

}
