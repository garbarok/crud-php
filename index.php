<?php
include("db.php");
include('includes/header.php');
?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
    </div>

    <div class="col-md-12">
      <a href="add_book.php" class="btn btn-primary mt-4">Añadir libro</a>
      <hr>
      <form action="search_book.php" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Buscar por título" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>

    <div class="col-md-12">
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Fecha de Publicación</th>
            <th>Precio</th>
            <th>Enlace</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM books";
          $result_books = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result_books)) { ?>
          <tr>
            <td><?php echo $row['isbn']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['publication_date']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><a href="<?php echo $row['link']; ?>" target="_blank">Comprar</a></td>
            <td>
              <a href="edit_book.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker">Editar</i>
              </a>
              <a href="delete_book.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt">Borrar</i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>