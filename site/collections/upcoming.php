<?php 

return function (){
    return page('events')
        ->children()
        ->filter(function($child){
            return $child->date()->toDate() > time();
        });
};