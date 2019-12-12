


var tl_start_left = anime.timeline({
  easing: 'easeOutExpo',
  duration: 400,
  direction: 'alternate',
  delay: anime.stagger(300),

});


tl_start_left
.add({
  targets: '#start-1',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-2',
  strokeDashoffset: [anime.setDashoffset, 0],
 
},)
.add({
  targets: '#start-3',
  strokeDashoffset: [anime.setDashoffset, 0],
 
})
.add({
  targets: '#start-4',
  strokeDashoffset: [anime.setDashoffset, 0],
})

.add({
  targets: '#start-5',
  strokeDashoffset: [anime.setDashoffset, 0],
}, '+=200')
.add({
  targets: '#start-6',
  strokeDashoffset: [anime.setDashoffset, 0],
})


var tl_start_right = anime.timeline({
  easing: 'easeOutExpo',
  duration: 400,
  delay: anime.stagger(50),
  direction: 'alternate',
});



tl_start_right
.add({
  targets: '#start-7',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-8',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-9',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-10',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-11',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-12',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#start-13',
  strokeDashoffset: [anime.setDashoffset, 0],
})



// ****** Mid ******

var tl_mid_left = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(300),
  duration: 400,
  direction: 'alternate',
});



tl_mid_left
.add({
  targets: '#mid-1',
  strokeDashoffset: [anime.setDashoffset, 0],

}, '+=4000')
.add({
  targets: '#mid-2',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-3',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-4',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-5',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-6',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-7',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-8',
  strokeDashoffset: [anime.setDashoffset, 0],
})



var tl_mid_right = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(300),
  direction: 'alternate',
  // loop: true
});

tl_mid_right
.add({
  targets: '#mid-9',
  strokeDashoffset: [anime.setDashoffset, 0],

}, '+=6000')
.add({
  targets: '#mid-10',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-11',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-12',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#mid-13',
  strokeDashoffset: [anime.setDashoffset, 0],
})


// end

var tl_end_left = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(300),
  duration: 500,
  // direction: 'alternate',
  // loop: true
});

tl_end_left
.add({
  targets: '#end-1',
  strokeDashoffset: [anime.setDashoffset, 0],
}, '+=11000')
.add({
  targets: '#end-2',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-3',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-4',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-5',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-6',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-7',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-8',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-10',
  strokeDashoffset: [anime.setDashoffset, 0],
})



var tl_end_right = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(500),
  duration: 500,
  // direction: 'alternate',
  // loop: true
});



tl_end_right
.add({
  targets: '#end-11',
  strokeDashoffset: [anime.setDashoffset, 0],

}, '+=12500')
.add({
  targets: '#end-12',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-13',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-14',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-14',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-15',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-16',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-17',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-18',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-19',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-20',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-21',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-22',
  strokeDashoffset: [anime.setDashoffset, 0],
})
.add({
  targets: '#end-23',
  strokeDashoffset: [anime.setDashoffset, 0],
})









// anime({
//     targets: '#t-1, #t-2, #a-1, #fuenf',
//     strokeDashoffset: [anime.setDashoffset, 0],
//     easing: 'easeInOutSine',
//     duration: 1000,
//     // delay: function(el, i) { return i * 250 },
//     delay: anime.stagger(300),
//     direction: 'alternate',
//     loop: false
//   });




// var morph = anime({
//   targets: '.morph-path',
//   d: [
//       {value: shapes[0].d},
//       {value: shapes[1].d}
//   ],
//   duration: 2000,
//   direction: 'alternate',
//   autoplay: true,
//   easing: 'linear',
//   elasticity: 800,
//   loop: true
// });

