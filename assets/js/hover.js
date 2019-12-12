const test = document.querySelector('.badge')
const text = test.innerHTML
console.log(test)

test.addEventListener('mouseover', mouseOver)
test.addEventListener('mouseout', mouseOut)

function mouseOver(){
    test.innerHTML = "Mehr lesen"
}

function mouseOut(){
    test.innerHTML = text
}