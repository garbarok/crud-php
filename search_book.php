<?php
include("db.php");
include('includes/header.php');

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $search_query = "SELECT * FROM books WHERE title LIKE '%$query%'";
    $result_books = mysqli_query($conn, $search_query);
} else {
    header('Location: index.php');
}
?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <a href="index.php" class="btn btn-primary mt-4">Volver a todos los libros</a>
      <hr>
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