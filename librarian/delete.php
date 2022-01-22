<?php
require_once('../db.php');
if(isset($_GET['id'])){
 
//  echo $_GET['id'];

      $id=$_GET['id'];
      $delete = mysqli_query($con, "DELETE FROM books WHERE book_id = '$id'");
      if($delete) {
        header('location:manage_book.php');
    } else {
        echo mysqli_error($con);
    }
   
    
}
?>



