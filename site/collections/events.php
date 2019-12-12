<?php 

return function ($site) {
    return $site->find('events')->children();

};