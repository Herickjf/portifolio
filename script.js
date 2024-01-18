
let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')
let close = document.getElementById('btn-fechar')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

close.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})