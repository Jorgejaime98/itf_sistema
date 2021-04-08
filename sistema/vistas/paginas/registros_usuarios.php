<?php 
$usuarios = ControladorFormulario::ctrSeleccionarRegistros();
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tablas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Tablas de datos</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="TablaUsuarios" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($usuarios as $key => $valor): ?>

                                <tr>
                                    <td><?php echo $key+1; ?></td>
                                    <td><?php echo $valor['nombres']; ?></td>
                                    <td><?php echo $valor['apellidos']; ?></td>
                                    <td><?php echo $valor['email']; ?></td>
                                    <td><?php echo $valor['celular']; ?></td>
                                    <td><?php echo $valor['rol']; ?></td>
                                    <td><?php echo $valor['estado']; ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>