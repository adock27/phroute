<?php include_once './shared/header.php'  ?>





<form action="/appblank/updatemeta" method="post" class="row g-3 needs-validation" novalidate>
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="meta" value="<?= $meta['meta_nombre'] ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            Ingrese un nombre valido!
        </div>
    </div>
    <div class="col-md-8">
        <label for="validationCustom02" class="form-label">Meta</label>
        <input type="number" class="form-control" id="validationCustom02" placeholder="0" name="tope" value="<?= $meta['tope'] ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            Ingrese un monto valido!
        </div>
    </div>

    <div class="col-12">
        <a href="/appblank/metas" class="btn btn-danger">Regresar</a>
        <button class="btn btn-success" type="submit">Submit form</button>
    </div>
</form>