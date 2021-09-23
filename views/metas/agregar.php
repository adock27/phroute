<?php include 'shared/header.php' ?>


<div class="container mt-5">
    <h2>Agregar Meta</h2>
    <br>
    <form action="/appblank/AddMeta" method="post" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" name="meta" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Ingrese un nombre valido!
            </div>
        </div>
        <div class="col-md-8">
            <label for="validationCustom02" class="form-label">Meta</label>
            <input type="number" class="form-control" id="validationCustom02" placeholder="0" name="tope" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Ingrese un monto valido!
            </div>
        </div>

        <div class="col-12">
            <a href="/appblank/metas" class="btn btn-danger">Regresar</a>
            <button class="btn btn-success" type="submit">Crear</button>
        </div>
    </form>
</div>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>