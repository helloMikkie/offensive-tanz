const openButton = document.querySelector('.open-nav')
const closeButton = document.querySelector('.close-nav')
const navTag = document.querySelector('nav')
const bodyTag = document.querySelector('body')


openButton.addEventListener('click', () =>{
	navTag.classList.add('navigation-open')
	bodyTag.style.overflow = 'hidden'
})

closeButton.addEventListener('click', ()=> {
	navTag.classList.remove('navigation-open')
	bodyTag.style.overflow = ''
})