
<?php include_once 'shared/header.php' ?>


    <section class="container mt-5">
        <div class="card-body bg-white shadow" style="border-radius: 13px;">
            <h4> METAS DE AHORRO</h4>
            Agrega metas para gestionar y ver el progreso
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus"></i> Nueva Meta
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">



                                <form action="metaadd" method="post" class="row g-3 needs-validation" novalidate>
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
                                        <button class="btn btn-success" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <a href="./agregar-meta" class="btn btn-success">Agregar meta</a>
    </div>

    <section class="container mt-5 ">
        <div class="bg-white card-body shadow" style="border-radius: 13px;">
            <div class="table-responsive">
                <table class="table table-hover table-borderless align-middle ">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Invertido</th>
                            <th>Restante</th>
                            <th>Progreso</th>
                            <th>Meta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php for ($i = 0; $i < count($data1); $i++) { ?>
                            <tr>
                                <td><?= $data1[$i]['meta_nombre']; ?></td>
                                <td><?php
                                    $con = new IngresoModel();
                                    $sumaIngresos = $con->GetSumaById($data1[$i]['meta_id']);

                                    echo '$ ' . number_format($sumaIngresos['SUM(ingreso_valor)']);
                                    ?></td>

                                <td> <?= '$ ' . number_format($data1[$i]['tope'] - $sumaIngresos['SUM(ingreso_valor)']) ?> </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= ($sumaIngresos['SUM(ingreso_valor)'] / $data1[$i]['tope']) * 100 ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="<?= $data1[$i]['tope']; ?>"></div>
                                    </div>
                                </td>
                                <td>$ <?= number_format($data1[$i]['tope']); ?></td>
                                <td>
                                    <a class="btn " href="./ver-meta/<?= $data1[$i]['meta_id']; ?>"><i class="bi bi-eye"></i></a>
                                    <a class="btn " href="./agregar-meta/<?= $data1[$i]['meta_id']; ?>"><i class="bi bi-pencil"></i></a>
                                    <a class="btn " href="./eliminar-meta/<?= $data1[$i]['meta_id']; ?>"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
    <style>
        .bg-success {
            background: #00F260;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0575E6, #00F260);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0575E6, #00F260);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
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