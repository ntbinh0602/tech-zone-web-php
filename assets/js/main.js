const overlay = document.querySelector('.js-search')
const modalSearch = document.querySelector('.modal-search')

// show overlay
function showOverlay() {
    modalSearch.classList.add('open')
}
overlay.addEventListener('click', showOverlay);

// close Overlay
function closeOverLay() {
    modalSearch.classList.remove('open')
}
modalSearch.addEventListener('click', closeOverLay)

let fixedMenu = document.querySelector('.menu-list')
let fullwidth1 = document.querySelector('.menu-list')
let fullwidth2 = document.querySelector('.header__menu')
let margin = document.querySelector('.sub-menu')
let flexMenuIcons=document.querySelectorAll('.header__menu--item')
let flexMenuIs=document.querySelectorAll('.header__menu--item i')
let headerItems = document.querySelector('.header__menu--items')
let headerContainer = document.querySelector('.header__with-search-box')
window.addEventListener('scroll', function () {
    let windowPosition = window.scrollY > 40
    let abcd = window.innerWidth > 738
    if (windowPosition && abcd) {
        headerItems.classList.add('fixed', windowPosition, abcd)
        headerItems.style.width='100%'
        fixedMenu.style.width='unset'

        headerItems.style.borderRadius='unset'
        for(let i = 0; i < flexMenuIcons.length; i++){
            let flexMenuIcon = flexMenuIcons[i];
            flexMenuIcon.classList.add('flex', windowPosition)
        }
        for(let i = 0; i < flexMenuIs.length; i++){
            let flexMenuI = flexMenuIs[i];
            flexMenuI.style.width='unset'
            flexMenuI.style.transform='none';
        }
    } else {
        headerItems.classList.remove('fixed', windowPosition, abcd)
        fixedMenu.style.width='1200px'
        headerItems.style.borderRadius='10px'
        for(let i = 0; i < flexMenuIcons.length; i++){
            let flexMenuIcon = flexMenuIcons[i];
            flexMenuIcon.classList.remove('flex', windowPosition)
        }
        for(let i = 0; i < flexMenuIs.length; i++){
            let flexMenuI = flexMenuIs[i];
            flexMenuI.style.width='-webkit-fill-available'
            flexMenuI.style.transform='scale(1.2, 1.8)'
        }
    }
})

// // remove border hover when scroll >100
let setUnBorder = document.querySelectorAll('span')
for (let i = 0; i < setUnBorder.length; i++) {
    window.addEventListener('scroll', function () {
        let unBorder = setUnBorder[i]
        let windowPosition = window.scrollY > 0
        unBorder.classList.toggle('border-none', windowPosition)
    })
}

// -----------------------------------
const mobileBar = document.querySelector('#mobile-menu')
const mobileMEnu = document.querySelector('.header-top .header-top__nav')
mobileBar.addEventListener('click', function (e) {
    e.stopPropagation()
    mobileMEnu.style = 'display:flex; flex-direction:column-reverse';
})
// window.addEventListener('click', function (e) {
//     e.stopPropagation()
//     document.querySelector('.header-top .header-top__nav').style.display='none'
// })
const closeMenu = document.querySelector('.close-mobile-menu')
closeMenu.addEventListener('click', function (e) {
    e.stopPropagation()
    document.querySelector('.header-top .header-top__nav').classList.toggle('display-none')
    location.reload()
})
let btnPlus=document.querySelector('#btnPlus')
let btnMinus = document.querySelector('#btnMinus')


//-------------------------Product Form---------------------------
// Show Product Form
const productFormBtns = document.querySelectorAll('.snip1457')
const productForms = document.querySelector('.modal-products')

function showProductForm() {
    productForms.classList.add('open')
    productForms.style.zIndex = '500'
}
for (const productFormBtn of productFormBtns) {
    productFormBtn.addEventListener('click', showProductForm)
}
// Close Login Form
const closeProductForm = document.querySelector('.js-close-product')
closeProductForm.addEventListener('click', function () {
    productForms.classList.remove('open')
})


