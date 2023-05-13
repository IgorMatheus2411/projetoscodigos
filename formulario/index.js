$(document).ready(function(){
    $('#cpf').mask('000.000.000-00', {reverse: true});
});


$(document).ready(function() {
    $("#telefone").mask("(99) 99999-9999");
});


(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated')
        }, false)
    })
})()

function voltar(){
    window.history.back();
}

    



