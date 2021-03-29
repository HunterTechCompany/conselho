const { has } = require("lodash");

abreModal = function (idModal) {
    const modal = document.querySelector('#' + idModal);
    modal.classList.add('exibir');
};

fechaModal = function (idModal) {
    const modal = document.querySelector('#' + idModal);
    modal.classList.remove('exibir');
};

selecionaTurma = function (e, modal) {

    let aux = {'value':e.value, 'name':e.innerHTML};
    let json_aux = JSON.stringify(aux);
    sessionStorage.setItem('turma_', json_aux);


    let turma = document.querySelector('#turma-selecionada');
    turma.innerHTML = e.innerHTML + "<i>+</i>";
    fechaModal(modal);
};

if(window.location.pathname == '/coordenador' || window.location.pathname == '/coordenador/') {
    let turma_aux = document.querySelector('#turma-selecionada');
    if(!sessionStorage.turma_) {
        abreModal('div-back-modal');
        turma_aux.setAttribute("style", "");
        turma_aux.style.cursor = "pointer";
    }
} else {
    let turma_aux = document.querySelector('#turma-selecionada');
    turma_aux.removeAttribute('onclick');
    turma_aux.setAttribute("style", "");
        turma_aux.style.cursor = "none";
}

if(sessionStorage.turma_) {
    let jsonTurma = sessionStorage.getItem('turma_');
    let turma_ = JSON.parse(jsonTurma);
    let turma_aux = document.querySelector('#turma-selecionada');
    turma_aux.innerHTML = turma_.name + "<i>+</i>";
}

idTurma = function () {
    let turma_ = JSON.parse(sessionStorage.getItem('turma_'));
    document.querySelector('#turma_id').value = turma_.value;
}

if(document.querySelector('#turma_id') && sessionStorage.turma_) {
    idTurma();
}

setKey = function (e) {
    let element = document.querySelector('#key_delete');
    element.setAttribute('value', e.value);
}