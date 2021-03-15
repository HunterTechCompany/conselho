var base_url = window.location.origin;
var url = window.location.href;

if(url != base_url + '/') {
    document.getElementById('titulo-conselho').style.display = "none";
}
