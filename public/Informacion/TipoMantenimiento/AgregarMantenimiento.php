<?php require_once "../app/views/template.php"; ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <cite title="CATEGORIAS">
                    <a href="#">
                        <button class="btn btn-default btn-sm">
                            <img height="40px" style="margin-left: -12px; margin-top: -10px;" src="<?php echo URL_SIGEMA;?>/img/tipo_mantenimiento.png">
                            </img>
                        </button>
                    </a>
                </cite>
            </div>
            <div>
                TIPOS DE MANTENIMIENTOS
                <div class="page-title-subheading">
                    Inserte los Tipos de Mantenimientos que crea necesarias para optimar los procesos del Sistema.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">
                            REGISTRAR TIPO DE MANTENIMIENTO
                        </h5>
                        <form class="">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label class="" style="font-weight: bold;">
                                        NOMBRE:*
                                    </label>
                                    <input class="form-control" name="" placeholder="Tipo de Mantenimiento" type="text">
                                    </input>
                                    <label class="" style="font-weight: bold;">
                                        EJECUTAR SOBRE:*
                                    </label>
                                    <select class="mb-2 form-control" name="Cbx_tipomante" required="">
                                        <option>--Seleccionar--</option>
                                    </select>
                                    <p class="text-muted">
                                        <i>
                                            Los campos con * son obligatorios
                                        </i>
                                    </p>
                                    <button class="mb-2 mr-2 btn btn-sigema " type="submit">
                                        REGISTRAR
                                    </button>
                                    <button class="mb-2 mr-2 btn btn-sigema-secundario">
                                        LIMPIAR
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">
                                TIPOS DE MANTENIMIENTOS
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TIPO DE MANTENIMENTO</th>
                                    <th>EJECUTAR SOBRE</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($datos['ListarTipoMantenimiento'] as $ListarTipoMantenimiento) : ?>
                                <tr>
                                    <th scope="row"><?php echo $ListarTipoMantenimiento->COD; ?></th>
                                    <td><?php echo $ListarTipoMantenimiento->DESCRIPCION; ?></td>
                                    <td><?php echo $ListarTipoMantenimiento->SOBRE; ?></td>
                                    <td>
                                        <cite title="Editar">
                                            <a href="#">
                                                <button class="btn btn-default btn-sm">
                                                    <img height="20px" src="<?php echo URL_SIGEMA;?>/img/edit.png">
                                                    </img>
                                                </button>
                                            </a>
                                        </cite>
                                        <cite title="Eliminar">
                                            <a href="#">
                                                <button class="btn btn-default btn-sm">
                                                    <img height="20px" src="<?php echo URL_SIGEMA;?>/img/delete.png">
                                                    </img>
                                                </button>
                                            </a>
                                        </cite>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
