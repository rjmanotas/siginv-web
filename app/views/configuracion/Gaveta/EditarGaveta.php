<?php require_once "../app/views/template.php"; ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <h1 class="h3 mb-2 text-gray-800">Editar Gavetas</h1>
            <p class="mb-4">
               Edite la cantidad de Gavetas que esten asociados a cada uno de los Estantes.
            </p>
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">ACTUALIZAR GAVETA</h5>
                        <form class="" action="<?php echo URL_SISINV;?>Gaveta/EditarGaveta/<?php echo $datos['idGaveta'];?>" method="POST">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label class="" style="font-weight: bold;">
                                        SELECCIONA EL ESTANTE:*
                                    </label>
                                    <input onkeyup="mayus(this);" value="<?php echo $datos['numEstante'];?>" class="form-control" name="NUM_ESTANTE" placeholder="1-100" type="number" required>
                                    <label class="" style="font-weight: bold;">
                                        NUMERO DE GAVETA:*
                                    </label>
                                    <input onkeyup="mayus(this);" value="<?php echo $datos['numGaveta'];?>" class="form-control" name="NUM_GAVETA" placeholder="1-6" type="number" required>
                                    <!-- <label class="" style="font-weight: bold;">
                                        DESCRIPCION:*
                                    </label>
                                    <input onkeyup="mayus(this);" class="form-control" name="DESCRIPCION" placeholder="ESTANTE ELECTRICIDAD" type="text" required>
                                    <p class="text-muted"><i> Los campos con * son obligatorios</i></p> -->
                                    <br>
                                    <button class="mb-2 mr-2 btn btn-info col-md-12" type="submit" value="ACTUALIZAR">
                                        ACTUALIZAR
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
                    <div class="row">
                        <div class="col-md-11" >
                                    <h6 class="m-0 font-weight-bold">GAVETAS</h6>
                        </div>
                            <div class="col-md-1">
                                <cite title="Agregar">
                                    <a  class="btn btn-success btn-icon-split" href="<?php echo URL_SISINV;?>Gaveta/ListarGaveta">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                        </span>
                                    </a>
                                </cite>
                            </div>
                        </div>
                    </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NUMERO DE ESTANTE</th>
                                    <th>NUMERO DE GAVETA</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $contador = 1;  foreach($datos['ListarGavetas'] as $ListarGavetas) : ?>
                                <tr>
                                    <th scope="row"> <?php echo $contador ++; ?></th>
                                    <td id="estanteNumero"><?php echo $ListarGavetas->Tbl_gaveta_NUMESTANTE;?></td>
                                    <td id="estanteDescripcion"><?php echo $ListarGavetas->Tbl_gaveta_NUMERO;?></td>
                                    <?php // if ($_SESSION['sesion_active']['tipo_usuario'] == 'ADMINISTRADOR') : ?>
                                    <td>
                                        <cite title="Editar">
                                        <a  class="btn btn-info btn-icon-split" href="<?php echo URL_SISINV;?>Gaveta/EditarGaveta/<?php echo $ListarGavetas->Tbl_gaveta_ID;?>">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                            </span>
                                        </a>
                                        </cite>
                                        <cite title="Eliminar">
                                        <a href="<?php echo URL_SISINV;?>Gaveta/EliminarGaveta/<?php echo $ListarGavetas->Tbl_gaveta_ID;?>" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                            </span>
                                        </a>
                                        </cite>
                                    </td>
                                    <?php // endif; ?>
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

