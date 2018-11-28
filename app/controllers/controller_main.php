<?php

include FNPATH."view_fns.php";

function action_index($view,$template){
    echo "hello";

    $data = ["title"=>"Главная"];

    renderViewWithTemplate("main","default",$data);
}