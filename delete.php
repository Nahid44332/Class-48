<?php
    include 'config.php';
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM students WHERE id=$id";

         $delete = mysqli_query ($conn, $query);

         if($delete == true){
        header('location:index.php');
         }
         else {
        echo "Failed Delete Data";
         }
        }
    ?>