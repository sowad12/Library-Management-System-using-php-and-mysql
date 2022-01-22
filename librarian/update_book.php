<?php
require_once('../db.php');
$id=$_POST['s_id'];
$book_name= $_POST['book_name'];
$book_author=$_POST['book_author'];
$book_purchase_date=$_POST['book_purchase_date'];
$book_qty=$_POST['book_qty'];
$available_qty=$_POST['available_qty'];
$sql = "UPDATE books SET book_name='{$book_name}',book_author='{$book_author}',book_purchase_date='{$book_purchase_date}', 
book_qty='{$book_qty}',available_qty='{$available_qty}' where book_id='$id'";
if(mysqli_query($con, $sql)){
    echo "Records were updated successfully.";
    header('location:manage_book.php');

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>