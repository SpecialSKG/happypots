<div class="pagetitle">
    <h1>Productos</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url("/Dashboard") ?>"><i class="bi bi-house-door"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="<?= base_url("/ProductosAd") ?>">Productos</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<br><br>

<section class="section">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Productos</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3"  action="<?= base_url("/ProductosAd/actualizar_producto") ?>" method="post" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="gridRadios1" value="1" <?php if ($detalle->estado == 1) { ?> checked <?php } ?>>
                                <label class="form-check-label" for="gridRadios1">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="gridRadios2" value="0" <?php if ($detalle->estado == 0) { ?> checked <?php } ?>>
                                <label class="form-check-label" for="gridRadios2">
                                    Inactivo
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $detalle->nombre; ?>" placeholder="Nombre" required>
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="descripcion" class="form-control" name="descripcion" id="descripcion" value="<?= $detalle->descripcion; ?>" placeholder="Descripcion" required>
                                <label for="descripcion">Descripcion</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="precio" id="precio" value="<?= $detalle->precio; ?>" placeholder="Precio" required>
                                    <label for="precio">Precio</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" type="file" name="img" id="img">
                                    <input hidden name="old_img"  value="<?= $detalle->img_producto_id; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" name="id_categoria" id="categoria">
                                        <option disabled>Categorias</option>
                                        <?php foreach ($categorias as $c) { ?>
                                            <option value="<?= $c->id ?>" <?= $c->id == $detalle->id_categoria  ? 'selected' : '' ?>>
                                                <?= $c->nombre_categorias ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input hidden id="id" name="id" value="<?= $detalle->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>

        </div>
    </div>
</section>