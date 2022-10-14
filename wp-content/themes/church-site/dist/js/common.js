function divByHeightWinow(selector, screenWidth) {
    let div = document.querySelector(`${selector}`)
    function setHeight() {
        console.log('hello')
        if (window.screen.width <= screenWidth) {
            div.style.height = `${window.innerHeight}px`
        } 
    }
    setHeight()
    window.addEventListener('resize', setHeight)
}