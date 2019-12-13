


var tl_start_left = anime.timeline({
  easing: 'easeOutExpo',
  duration: 400,
  direction: 'alternate',
  delay: anime.stagger(200),

});


tl_start_left
.add({
  targets: '#l-start-1',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
 

})
.add({
  targets: '#l-start-2',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
 
},)
.add({
  targets: '#l-start-3',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
 
})
.add({
  targets: '#l-start-4',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
})

.add({
  targets: '#l-start-5',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
}, '+=200')
.add({
  targets: '#l-start-6',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
})


var tl_start_right = anime.timeline({
  easing: 'easeOutExpo',
  duration: 400,
  delay: anime.stagger(50),
  direction: 'alternate',
});



tl_start_right
.add({
  targets: '#r-start-1',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
})
.add({
  targets: '#r-start-2',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
})
.add({
  targets: '#r-start-3',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-start-4',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-start-5',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-start-6',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
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
  targets: '#l-mid-1',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",

}, '+=4000')
.add({
  targets: '#l-mid-2',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-3',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-4',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-5',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-6',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-7',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-mid-8',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
targets: '#l-mid-9',
strokeDashoffset: [anime.setDashoffset, 0],
strokeWidth: "24px",
})



var tl_mid_right = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(300),
  duration: 400,
  direction: 'alternate',
  // loop: true
});

tl_mid_right
.add({
  targets: '#r-mid-1',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
}, '+=4000')
.add({
  targets: '#r-mid-2',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-mid-3',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-mid-4',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-mid-5',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-mid-6',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
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
  targets: '#l-end-1',
  strokeDashoffset: [anime.setDashoffset, 0],
  strokeWidth: "24px",
}, '+=11000')
.add({
  targets: '#l-end-2',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-3',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-4',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-5',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-6',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-7',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-8',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-9',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#l-end-10',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})



var tl_end_right = anime.timeline({
  easing: 'easeOutExpo',
  delay: anime.stagger(300),
  duration: 500,
  // direction: 'alternate',
  // loop: true
});



tl_end_right
.add({
  targets: '#r-end-3',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",

}, '+=11000')
.add({
  targets: '#r-end-2',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-4',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-1',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-5',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-6',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-7',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-8',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})
.add({
  targets: '#r-end-9',
  strokeDashoffset: [anime.setDashoffset, 0],
    strokeWidth: "24px",
})


