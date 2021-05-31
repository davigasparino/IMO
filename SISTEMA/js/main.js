

(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})();

$(document).click(function(){
    $('.notifications-container').hide();
})
$('.nav-item.notificate-grid span.material-icons.icon, .nav-item.notificate-grid span.notifications').click(function(e){
    e.stopPropagation();
    $('.notifications-container').hide();
    $(this).parents('.nav-item.notificate-grid').find('.notifications-container').show();
});

$(document).ready(function(){
   $('#assinaturacontrato').change(function(){
       if($(this).prop('checked') === true){
           $('#contrato-assinatura').prop('disabled', false);
       }else{
           $('#contrato-assinatura').prop('disabled', true);
       }
   });
});