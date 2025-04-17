<?php
    include 'config.php';
?>
<?php
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id=  $id";
     $edit = mysqli_query ($conn, $query);
     $realdata = mysqli_fetch_assoc( $edit);

     $id = $realdata['id'];
     $name = $realdata['name'];
     $class = $realdata['class'];
     $roll = $realdata['roll'];
     $phone = $realdata['phone_number'];
     $email = $realdata['email'];
     $address = $realdata['address'];
 }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $query = "UPDATE students SET name = '$name', class = '$class', roll = '$roll', phone_number = '$phone', email = '$email' , address = '$address' WHERE id = $id";
        $update = mysqli_query($conn, $query);
        if($update == true){
            header('location:index.php');
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mamber Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">School Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
    </div>
  </div>
</nav>
<!-- Navbar End -->
 <!-- Add Student -->
 <div class="container">
 <h1 class="mt-3">Edit Mamber</h1 >
 <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $name ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class</label>
    <input type="Text" class="form-control" id="exampleInputEmail1" name="class" value="<?php echo $class ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Roll</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="roll" value="<?php echo $roll ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="Text" class="form-control" id="exampleInputEmail1" name="phone_number" value="<?php echo $phone ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $email ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <textarea name="address" id="" class="form-control" required><?php echo $address ?></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>