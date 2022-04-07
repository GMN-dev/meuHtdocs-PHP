<?php

function teste($callback){
    //processo
    $callback()
}

teste(function(){
    echo"terminou";
});

?>