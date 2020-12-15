<?php require_once "../app/views/template.php"; ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <cite title="CATEGORIAS">
                    <a href="#">
                        <button class="btn btn-default btn-sm">
                            <img height="40px" style="margin-left: -12px; margin-top: -10px;" src="<?php echo URL_SIGEMA;?>/img/sede.png">
                            </img>
                        </button>
                    </a>
                </cite>
            </div>
            <div>Ajustes Sede
                <div class="page-title-subheading">
                    Inserte los sede que crea necesarias para optimar los procesos del Sistema.
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
                        <h5 class="card-title">ACTUALIZAR SEDE</h5>
                        <form class="" method="POST" action="<?php echo URL_SIGEMA;?>/Sede/Editar/<?php echo $datos['id']?>">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label class="" style="font-weight: bold;">NOMBRE DE LA SEDE:*</label>
                                    <input onkeyup="mayus(this);" class="form-control" name="SEDE" value="<?php echo $datos['sede']  ?>" type="text"  required >
                                    </input>
                                    <label class="" style="font-weight: bold;">REGIONAL:*</label>
                                    <select class="mb-2 form-control" name="CBX_REGIONAL" id="CBX_REGIONAL" required > 
                                        
                                    </select>
                                    <label class="" style="font-weight: bold;">CENTRO:*</label>
                                    <select class="mb-2 form-control" name="CBX_CENTRO" id="CBX_CENTRO" required>
                                        
                                    </select>
                                    <label class="" style="font-weight: bold;">RESPONSABLE:*</label>
                                    <input onkeyup="mayus(this);" class="form-control" name="RESPONSABLE" value="<?php echo     $datos['responsable'] ?>" type="text" required>
                                    </input>
                                    <label class="" style="font-weight: bold;">TELEFONO:*</label>
                                    <input class="form-control" name="TELEFONO" value=" <?php echo $datos['telefono'] ?>" type="text" required>
                                    </input>
                                    <p class="text-muted"><i>Los campos con * son obligatorios</i></p>
                                    <button class="mb-2 mr-2 btn btn-sigema-secundario col-md-12" type="submit">ACTUALIZAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">SEDES</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>SEDE</th>
                                    <th>CENTRO</th>
                                    <th>RESPONSABLE</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($datos['ListarSede'] as $ListarSede) : ?>
                                <tr>
                                    <th scope="row"><?php echo $ListarSede->Tbl_sede_COD; ?></th>
                                    <td><?php echo $ListarSede->Tbl_sede_NOMBRE; ?></td>
                                    <td><?php echo $ListarSede->CENTRO; ?></td>
                                    <td><?php echo $ListarSede->Tbl_sede_RESPONSABLE; ?></td>
                                    <?php if ($_SESSION['sesion_active']['tipo_usuario'] == 'ADMINISTRADOR') : ?>
                                        <td>
                                            <cite title="Editar">
                                                <a href=" <?php echo URL_SIGEMA;?>/Sede/Editar/<?php echo $ListarSede->Tbl_sede_COD;?>">
                                                    <button class="btn btn-default btn-sm">
                                                        <img height="20px" src="<?php echo URL_SIGEMA;?>/img/edit.png">
                                                        </img>
                                                    </button>
                                                </a>
                                            </cite>
                                            <cite title="Eliminar">
                                                <a href=" <?php echo URL_SIGEMA; ?>/Sede/Eliminar/<?php echo $ListarSede->Tbl_sede_COD;?>">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function ListarRegional() {
    $.ajax({
        url: '<?php echo URL_SIGEMA;?>/Ajax/ObtenerRegionales',
        type: 'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena = "<option value='" + data[i].Tbl_reg_COD + "'>" + data[i].Tbl_reg_NOMBRE + "</option>";
            }
            $("#CBX_REGIONAL").html(cadena);
            var IdRegional = $("#CBX_REGIONAL").val();
            ListarCentro(IdRegional);
        } else {
            cadena = "<option value=''>'NO SE ENCONTRANRON DATOS'</option>";
            $("#CBX_REGIONAL").html(cadena);
        }
    })
}
function ListarCentro(IdRegional) {
    $.ajax({
        url: '<?php echo URL_SIGEMA;?>/Ajax/ObtenerCentros',
        type: 'POST',
        data: {
            IdRegional: IdRegional
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena = "<option value='" + data[i].Tbl_centro_COD + "'>" + data[i].NOMBRE + "</option>";
            }
            $("#CBX_CENTRO").html(cadena);
            var IdCentro = $("#CBX_CENTRO").val();
            ListarSede(IdCentro);
        } else {
            cadena = "<option value=''>'NO SE ENCONTRANRON DATOS'</option>";
            $("#CBX_CENTRO").html(cadena);
        }
    })
}
ListarRegional();
</script>