// Script JavaScript de validation formulaire tiré des exemples boostrap
(function () {
  'use strict'

  // On récupère tous les champs du formulaire auxquels nous voulons appliquer des styles de validation Bootstrap.
  var forms = document.querySelectorAll('.needs-validation')

  // Parcourir chacun des champs et empêcher l'envoie du formulaire s'il n'est pas valide
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
})()