<?php include('templates/header.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <?php

  if ($rol == 1) {
    $where = '';
  } else if ($rol == 2) {
    $where = "WHERE id = $id";
  }
  $sql = "SELECT id, usuario, nombre, tipo_usuario FROM usuarios $where";
  $resultado = $conn->query($sql);

  ?>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>Rol</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['usuario']; ?></td>
              <td><?= $row['nombre']; ?></td>
              <td><?= $row['tipo_usuario']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('templates/footer.php'); ?>