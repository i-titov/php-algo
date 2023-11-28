<?php
function promptFn(){
    $prompt = readline("Need some text:  ");
    if($prompt == ""){
        echo 'Nothing to show';
        return;
    }
    $length = strlen($prompt);
    for ($i = 0; $i< $length; $i++){
        echo "Lettre " . strtoupper($prompt[$i]). "  ";
    }
}
promptFn();