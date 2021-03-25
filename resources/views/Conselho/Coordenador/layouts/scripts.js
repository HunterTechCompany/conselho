
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

if(window.location.pathname == '/coordenador') {
    if(!sessionStorage.turma_) {
        abreModal('div-back-modal');
    }
} else {
    let turma_aux = document.querySelector('#turma-selecionada');
    turma_aux.removeAttribute('onclick');
}

if(sessionStorage.turma_) {
    let jsonTurma = sessionStorage.getItem('turma_');
    let turma_ = JSON.parse(jsonTurma);
    let turma_aux = document.querySelector('#turma-selecionada');
    turma_aux.innerHTML = turma_.name + "<i>+</i>";
}