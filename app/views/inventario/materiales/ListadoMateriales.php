<?php require_once "../app/views/template.php"; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">SISTEMA DE INVENTARIO</h1>
          <p class="mb-4">En esta seccion puede consultar los materiales existentes.</p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado de Materiales</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>FECHA</th>
                      <th>DESCRIPCION</th>
                      <th>REFERENCIA</th>
                      <th>CANTIDAD</th>
                      <th>UNIDAD MEDIDA</th>
                      <th>ESTANTE</th>
                      <th>GAVETA</th>
                      <th>CATEGORIA</th>
                      <th>ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>2011/04/25</td>
                      <?php // if ($_SESSION['sesion_active']['tipo_usuario'] == 'ADMINISTRADOR') : ?>
                          <td>
                            <cite title="Editar">
                              <a href="#" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-edit"></i>
                                </span>
                                
                              </a>
                            </cite>
                            <cite title="Borrar">
                              <a href="#" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </cite>
                          </td>
                      <?php // endif; ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<!-- /.container-fluid -->
