const headerTag = document.querySelector('header')
const logoTag = document.querySelector('.header-logo')
const logoOnScroll = document.querySelector('.header-logo-onScroll')


document.addEventListener('scroll', function(){

    const pixels = window.pageYOffset

  if(pixels < 128){
      headerTag.style.background = "transparent"
      headerTag.style.borderBottom = ""
    logoTag.style.display = 'block'
    logoOnScroll.style.transform = 'translateY(-100px)'


  } else{
    headerTag.style.background = "white"
    headerTag.style.borderBottom = "1px dotted #000"
    logoTag.style.display = 'none'
    logoOnScroll.style.transform = 'translateY(0)'

  }

})
