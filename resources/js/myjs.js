let navAnchors = document.querySelectorAll('#navNavNavNav>li>a');

console.log(navAnchors)
navAnchors.forEach(anchor => {
    anchor.addEventListener('click',()=>{
        anchor.classList.add('active')
        navAnchors.forEach(el=>{
            if(el!=anchor)
                el.classList.remove('active')
        })
    })
})