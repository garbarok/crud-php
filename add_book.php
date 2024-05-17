<?php
include("db.php");

if (isset($_POST['save_book'])) {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $publication_date = $_POST['publication_date'];
    $price = $_POST['price'];
    $link = $_POST['link'];

    $query = "INSERT INTO books (isbn, title, description, author, publication_date, price, link) VALUES ('$isbn', '$title', '$description', '$author', '$publication_date', '$price', '$link')";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Libro guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-body">
        <form action="add_book.php" method="POST">
          <div class="form-group">
            <input type="text" name="isbn" class="form-control" placeholder="ISBN" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Título" required>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripción" required></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="author" class="form-control" placeholder="Autor" required>
          </div>
          <div class="form-group">
            <input type="date" name="publication_date" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Precio" required>
          </div>
          <div class="form-group">
            <input type="url" name="link" class="form-control" placeholder="Enlace" required>
          </div>
          <input type="submit" name="save_book" class="btn btn-success btn-block" value="Guardar libro">
        </form>
      </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>