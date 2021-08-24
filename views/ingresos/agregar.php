<div class="mt-3">
    <form action="/appblank/AddIngreso" method="post">
        <input type="hidden" name="id" id="" value="<?= $id ?>">
        <div class="d-flex">
            <input class="form-control me-2" placeholder="Agregar un ingreso a mi meta" type="number" name="valor" required>
        </div>

        <div class="mt-2">
        <a href="/appblank/metas" class="btn btn-outline-danger">Regresar</a>
            <button type="submit" class="btn btn-success">Agregar</button>
        </div>

    </form>
</div>