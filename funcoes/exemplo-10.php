<?php

function test($callback){

        //processp lento

        $callback();
}

test(function(){

        echo "terminou!";

});


?>