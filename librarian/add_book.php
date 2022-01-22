<?php
include('header.php');

if(isset($_POST['save_book'])){
  
    $book_name=$_POST['book_name'];
    $book_author=$_POST['book_author'];
    $book_purchase_date=$_POST['book_purchase_date'];

    $book_qty=$_POST['book_qty'];
    $available_qty=$_POST['available_qty'];
    
  
    $sql = "INSERT INTO books (book_name,book_author,book_purchase_date,book_qty,available_qty)
     VALUES ('$book_name','$book_author','$book_purchase_date' ,'$book_qty',' $available_qty')";
    
    if(mysqli_query($con, $sql)){
        echo "Records inserted successfully.";
        
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    mysqli_close($con);
    // Close connection
   }
  
  
  
  //   $result=mysqli_query($con,query:
  //   "INSERT INTO 'students'('fname','lname','roll','reg','email','username','password','phone')
  // VALUES('$fname','$lname','$email','$username',' $password','$roll','$reg','$phone')" 
  // );


?> 

<!-- 
//////////////// -->
               <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Add Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
               
                <div class="row animated fadeInUp">
                    <div class="col-sm-6 col-sm-offset-3">
                 
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"method="post" action"<?=$_SERVER['PHP_SELF'] ?>">
                                        <h5 class="mb-lg">ADD BOOKS</h5>
                                        <div class="form-group">
                                            <label for="book_name" class="col-sm-4 control-label">Book Name</label>
                                            <div class="col-sm-8">
                                                <input type="book_name" class="form-control" id="" placeholder="Book Name" name="book_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_author" class="col-sm-4 control-label">Author Name</label>
                                            <div class="col-sm-8">
                                                <input type="book_author" class="form-control" id="book_author" placeholder="Author Name" name="book_author">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="book_purchase_date" class="col-sm-4 control-label">Publication Date</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="book_purchase_date" placeholder="Date" name="book_purchase_date">
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label for="book_qty" class="col-sm-4 control-label">Book Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="book_qty" class="form-control" id="book_qty" placeholder="Quantity" name="book_qty">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="available_qty" class="col-sm-4 control-label">Available Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="available_qty" class="form-control" id="" placeholder="Quantity" name="available_qty">
                                            </div>
                                        </div>
                                     
                                      
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-9">
                                                <button type="submit" name="save_book" class="btn btn-primary"><i class="fa fa-save"></i> Save Book</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
require_once ('footer.php');
?> 