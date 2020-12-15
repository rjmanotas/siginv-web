<?php require_once "../app/views/template.php"; ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <cite title="CATEGORIAS">
                    <a href="#">
                        <button class="btn btn-default btn-sm">
                            <img height="40px" style="margin-left: -12px; margin-top: -10px;" src="<?php echo URL_SIGEMA;?>/img/ambiente.png">
                            </img>
                        </button>
                    </a>
                </cite>
            </div>
            <div>
                Ajustes de Ambiente
                <div class="page-title-subheading">
                    Inserte los Ambientes que crea necesarias para optimar los procesos del Sistema.
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
                        <h5 class="card-title">REGISTRAR AMBIENTE</h5>
                        <form class="">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label class="" style="font-weight: bold;">NOMBRE DEL AMBIENTE:*</label>
                                    <input class="form-control" name="" placeholder="NOMBRE DEL AMBIENTE" type="text" required>
                                    </input>
                                    <label class="" style="font-weight: bold;">REGIONAL:*</label>
                                    <select class="mb-2 form-control" name="CBX_REGIONAL" id="CBX_REGIONAL" required="">
                                        
                                    </select>
                                    <label class="" style="font-weight: bold;">CENTRO:*</label>
                                    <select class="mb-2 form-control" name="CBX_CENTRO" id="CBX_CENTRO" required="">
                                        
                                    </select>
                                    <label class="" style="font-weight: bold;">SEDE:*</label>
                                    <select class="mb-2 form-control" name="CBX_SEDE" required="">
                                        
                                    </select>
                                    <p class="text-muted">
                                        <i>Los campos con * son obligatorios</i>
                                    </p>
                                    <button class="mb-2 mr-2 btn btn-sigema " type="submit">REGISTRAR</button>
                                    <button class="mb-2 mr-2 btn btn-sigema-secundario">LIMPIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">AMBIENTES</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>AMBIENTE</th>
                                    <th>SEDE</th>
                                    <th>CENTRO</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($datos['ListarAmbiente'] as $ListarAmbiente) : ?>
                                <tr>
                                    <th scope="row"><?php echo $ListarAmbiente->Tbl_amb_COD; ?></th>
                                    <td><?php echo $ListarAmbiente->Tbl_amb_NOMBRE;?></td>
                                    <td><?php echo $ListarAmbiente->SEDE;?></td>
                                    <td><?php echo $ListarAmbiente->CENTRO;?></td>
                                    <?php if ($_SESSION['sesion_active']['tipo_usuario'] == 'ADMINISTRADOR') : ?>
                                        <td>
                                            <cite title="Editar">
                                                <a href=" <?php echo URL_SIGEMA;?>/Regional/Editar/<?php echo $ListarRegional->Tbl_reg_COD;?>">
                                                    <button class="btn btn-default btn-sm">
                                                        <img height="20px" src="<?php echo URL_SIGEMA;?>/img/edit.png">
                                                        </img>
                                                    </button>
                                                </a>
                                            </cite>
                                            <cite title="Eliminar">
                                                <a href=" <?php echo URL_SIGEMA; ?>/Regional/Delete/<?php echo $ListarRegional->Tbl_reg_COD;?>">
                                                    <button class="btn btn-default btn-sm">
                                                        <img height="20px" src="<?php echo URL_SIGEMA;?>/img/delete.png">
                                                        </img>
                                                    </button>
                                                </a>
                                            </cite>
                                        </td>
                                    <?php endif; ?>
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
