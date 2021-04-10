<?php

$usuarios = ControladorFormulario::ctrSeleccionarRegistrosUsuarios();
//var_dump($usuarios);
?>

<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <div class="d-flex flex-row">
                <i class="fas fa-user-tag lead mt-2 mr-1"></i>
                <h4 class="mt-1 mb-0 mr-2">Usuarios</h4>
                <a class="btn btn-success <?php
                                            if (isset($_GET["page"])) {
                                                if ($_GET["page"] == "crud_registros_usuarios") {
                                                    echo "active";
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>" href="index.php?page=crud_registros_usuarios" data-toggle="modal" data-target="#crearUsuarios"><i class="fas fa-plus-square"></i> Nuevo</a>
            </div>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Información</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="InicioTabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Registro</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $key => $valor): ?>
                                <tr>
                                    <td><?php echo $key + 1;   ?></td>
                                    <td><?php echo $valor["email"];   ?></td>
                                    <td><?php echo $valor["registro"];   ?></td>
                                    <td><?php echo $valor["estado"];   ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php echo $valor['id_usuarios']; ?>" class="btn btn-info" data-toggle="modal" data-target="#visualizarUsuarios"><i class="far fa-eye"></i></a>&nbsp;
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php echo $valor['id_usuarios']; ?>" class="btn btn-secondary EditarUsuario" data-toggle="modal" data-target="#editarUsuarios"><i class="far fa-edit"></i></a>&nbsp;
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php echo $valor['id_usuarios']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#eliminarUsuarios"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Registro</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>