<?php
require_once('header.php');
if(isset($_POST['issue_book'])){
   $student_id=$_POST['student_id'];
   $book_id=$_POST['book_id'];
   $book_issue_date=$_POST['book_issue_date'];
   $book_issue_time=$_POST['book_issue_time'];
   $sql = "INSERT INTO  issue_books (student_id,book_id,book_issue_date,book_issue_time)
   VALUES ('$student_id','$book_id','$book_issue_date','$book_issue_time')";

  
  if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
  
    
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
// Close connection

}

?> 
               <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Issue Book</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-6 col-sm-offset-3">
                   
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12" >
                                    <form class="form-inline" method="POST" action="">
                                        <h5 class="mb-lg "></h5>
                                        <div class="form-group">
                                   
                                        <select class="form-control" name="student_id" >
                                        <option value="">select</option>
                                        <?php     
                                        $sql='select *from students';
                                  $result=mysqli_query($con,$sql);
                                  while($row=mysqli_fetch_assoc($result)) { ?>
                                  <option value="<?=$row['id']?>"><?=ucwords($row['fname'].' '.$row['lname'] )?></option>
                                   
                                  <?php 
                                   }
                                  ?>   
                                        </select>

                                         
                                        </div>
                                      
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="search">search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if(isset($_POST['search'])){
                             
                                 $id=$_POST['student_id'];
                                 $sql="select *from students where  id='$id'";
                                 $result=mysqli_query($con,$sql);
                                 $row=mysqli_fetch_assoc($result);
                                 
                                 ?>
                                 <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="">
                                       
                                        <div class="form-group">
                                            <label for="name">Student Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="" value="<?=ucwords($row['fname'].' '.$row['lname'] ) ?>" readonly>
                                            <input type="hidden" value="<?= $row['id']?>" name="student_id">
                                        </div>
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            
                                        <select class="form-control" name="book_id" >
                                        <option value="">select</option>
                                        <?php     
                                        $sql=" select *from books where available_qty>0 ";
                                  $result=mysqli_query($con,$sql);
                                  while($row=mysqli_fetch_assoc($result)) { ?>
                                  <option value="<?=$row['book_id'] ?>"> <?=ucwords( $row['book_name']) ?></option>
                                   
                                  <?php 
                                   }
                                     ?>   
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Book Issue Date</label>
                                            <input class="form-control"type="text" name="book_issue_date" value="<?=date('d-m-y') ?>"readonly>
                                </div>
                                <div class="form-group">
                                            <label>Book Issue Time</label>
                                            <?php date_default_timezone_set('Asia/Dhaka'); ?>
                                            <input class="form-control"type="text" name="book_issue_time" value="<?= date("h:i:sa")?>"readonly>
                                </div>
                                        <div class="form-group">
                                            <button type="submit" name="issue_book"class="btn btn-primary">Save Issue Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                 <?php
                            }
                            ?>
                        </div>
                    </div>
                    </div>
                </div>
<?php
require_once ('footer.php');
?> 