
const scrollTag = document.querySelector('.badge')

if (scrollTag) {
  scrollTag.addEventListener('click', function(event){
    event.preventDefault()

    const href = this.getAttribute('href')
    const topElement = document.querySelector(href).offsetTop - 200
    window.scroll({
      top: topElement, behavior: 'smooth'
    })
  })
}
