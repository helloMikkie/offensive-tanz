<?php 

return function () {
    return [
    'upcomingEvents' => collection('upcoming')->sortBy('date', 'asc'),
   
    'pastEvents' => collection('past')->sortBy('date', 'asc'),



    ];
};