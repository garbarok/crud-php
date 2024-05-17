<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $isbn = $row['isbn'];
        $title = $row['title'];
        $description = $row['description'];
        $author = $row['author'];
        $publication_date = $row['publication_date'];
        $price = $row['price'];
        $link = $row['link'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $publication_date = $_POST['publication_date'];
    $price = $_POST['price'];
    $link = $_POST['link'];

    $query = "UPDATE books SET isbn = '$isbn', title = '$title', description = '$description', author = '$author', publication_date = '$publication_date', price = '$price', link = '$link' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Libro actualizado satisfactoriamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}
?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-body">
        <form action="edit_book.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input type="text" name="isbn" class="form-control" value="<?php echo $isbn; ?>" placeholder="ISBN" required>
          </div>
          <div class="form-group">
            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Título" required>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripción" required><?php echo $description; ?></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="author" class="form-control" value="<?php echo $author; ?>" placeholder="Autor" required>
          </div>
          <div class="form-group">
            <input type="date" name="publication_date" class="form-control" value="<?php echo $publication_date; ?>" required>
          </div>
          <div class="form-group">
            <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $price; ?>" placeholder="Precio" required>
          </div>
          <div class="form-group">
            <input type="url" name="link" class="form-control" value="<?php echo $link; ?>" placeholder="Enlace" required>
          </div>
          <div class="d-flex justify-content-between">
            <input type="submit" name="update" class="btn btn-success" value="Actualizar libro">
            <a href="index.php" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>