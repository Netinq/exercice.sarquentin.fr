function headDisplay()
{
    const nav = document.querySelector('nav');
    const burgerLine = document.getElementsByClassName('burger-line');

    if (nav.classList.contains('d-none')) { 
        nav.classList.remove('d-none'); 
        Array.from(burgerLine).forEach(elem => {
            elem.classList.add('burger-line-close'); 
        });
    }
    else { 
        nav.classList.add('d-none'); 
        Array.from(burgerLine).forEach(elem => {
            elem.classList.remove('burger-line-close'); 
        });
    }
}