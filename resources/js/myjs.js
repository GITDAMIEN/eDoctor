let navAnchors = document.querySelectorAll('#navNavNavNav>li>a');

console.log(navAnchors)
navAnchors.forEach((anchor,index)=> {
    anchor.addEventListener('click', ()=>{
        navAnchors.forEach((a,i)=>{
            if(i==index)
                a.classList.add('active')
            else
                a.classList.remove('active')
        })
    })
})
