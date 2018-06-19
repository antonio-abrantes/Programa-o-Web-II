/*
* Scroll Suave para Link Interno com JavaScript Puro
*/

const menuIntens = document.querySelectorAll('.navigation a[href^="#"]');

menuIntens.forEach(item =>{
    item.addEventListener('click', scrollToIdOnClick);
});

function getScrollTopByHref(element) {
    const id = element.getAttribute('href');
    return document.querySelector(id).offsetTop;
}

function scrollToIdOnClick(event){
    event.preventDefault();
    const to = getScrollTopByHref(event.target) - 80;
    scrollToPosition(to);

}

function scrollToPosition(to) {
    window.scroll({
        top: to,
        behavior: "smooth"
    });
}