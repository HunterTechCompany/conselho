let a = document.getElementsByTagName('a');
for(let i = 0; i < a.length; i++) {
    a[i].addEventListener('mouseenter', function(){contrastar(a[i])});
    a[i].addEventListener('mouseleave', function(){contrastar(a[i])});
}

function contrastar(elemento) {
    if(elemento.style.color == 'red') {
        elemento.style.color = 'black';
    } else {
        elemento.style.color = 'red';
    }

};
