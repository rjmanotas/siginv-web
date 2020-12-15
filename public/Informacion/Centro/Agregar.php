<?php require_once "../app/views/template.php"; ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <cite title="CATEGORIAS">
                    <a href="#">
                        <button class="btn btn-default btn-sm">
                            <img height="40px" style="margin-left: -12px; margin-top: -10px;" src="<?php echo URL_SIGEMA;?>/img/centro.png">
                            </img>
                        </button>
                    </a>
                </cite>
            </div>
            <div>
                Ajustes Centro
                <div class="page-title-subheading">
                    Inserte los centros que crea necesarias para optimar los procesos del Sistema.
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
                        <h5 class="card-title">REGISTRAR CENTRO</h5>
                        <form class="" action="<?php echo URL_SIGEMA;?>/Centro/Crear" method="POST">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label class="" style="font-weight: bold;">NOMBRE DEL CENTRO:*</label>
                                    <input onkeyup="mayus(this);" class="form-control" name="CENTRO" placeholder="NOMBRE DEL CENTRO" type="text" required>
                                    </input>
                                    <label class="" style="font-weight: bold;">TELEFONO:*</label>
                                    <input onkeyup="mayus(this);" class="form-control" name="TELEFONO" placeholder="Eje: 3122334444" type="text" required>
                                    </input>
                                    <label class="" style="font-weight: bold;">SUBDIRECTOR:*</label>
                                    <input onkeyup="mayus(this);" class="form-control" name="SUBDIRECTOR" placeholder="NOMBRE DEL SUBDIRECTOR" type="text" required>
                                    </input>
                                    <label class="" style="font-weight: bold;">REGIONAL:*</label>
                                    <select class="mb-2 form-control" name="REGIONAL" required="">
                                        <option value="">--SELECCIONAR--</option>
                                        <?php foreach ($datos['ListarRegional'] as $ListarRegional) : ?>
                                            <?php if($ListarRegional) : ?>
                                                <option value="<?php echo $ListarRegional->Tbl_reg_COD;?>"><?php echo $ListarRegional->Tbl_reg_NOMBRE;?></option>
                                             <?php else : ?>
                                                <option value="0">--NO EXISTEN DATOS--</option>   
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <p class="text-muted"><i>Los campos con * son obligatorios</i></p>
                                    <button class="mb-2 mr-2 btn btn-sigema col-md-12" type="submit" value="REGISTRAR">REGISTRAR</button>
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
                                CENTROS DE FORMACION
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CENTRO</th>
                                    <th>TELEFONO</th>
                                    <th>SUBDIRECTOR</th>
                                    <th>REGIONAL</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($datos['ListarCentro'] as $ListarCentro) :  ?>
                                <tr>
                                    <th scope="row"><?php echo $ListarCentro->Tbl_centro_COD; ?></th>
                                    <td><?php echo $ListarCentro->Tbl_centro_NOMBRE; ?></td>    
                                    <td><?php echo $ListarCentro->Tbl_centro_TELEFONO; ?></td>
                                    <td><?php echo $ListarCentro->Tbl_centro_SUBDIRECTOR; ?></td>
                                    <td><?php echo $ListarCentro->REGIONAL;?></td>
                                    <?php if ($_SESSION['sesion_active']['tipo_usuario'] == 'ADMINISTRADOR') : ?>
                                        <td>
                                            <cite title="Editar">
                                                <a href=" <?php echo URL_SIGEMA;?>/Centro/Editar/<?php echo $ListarCentro->Tbl_centro_COD;?>">
                                                    <button class="btn btn-default btn-sm">
                                                        <img height="20px" src="<?php echo URL_SIGEMA;?>/img/edit.png">
                                                        </img>
                                                    </button>
                                                </a>
                                            </cite>
                                            <cite title="Eliminar">
                                                <a href=" <?php echo URL_SIGEMA; ?>/Centro/Delete/<?php echo $ListarCentro->Tbl_centro_COD;?>">
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
