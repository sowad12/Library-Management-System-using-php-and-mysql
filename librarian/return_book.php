<?php
require_once ('header.php');
?> 
               <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Students</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>RETURN BOOKS</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>STUDENT NAME</th>
                                        <th>ROLL</th>
                                        <th>BOOK NAME</th>
                                        <th>BOOK ISSUE DATE</th>
                                        <th>BOOK ISSUE TIME</th>
                                        <th>RETURN BOOK</th>
                                    </tr>
                                    </thead>
                                  <tbody>
                                  <?php
                                  $sql=" select a.id,b.fname,b.lname,b.roll,a.book_issue_date,a.book_issue_time,c.book_name
                                  from issue_books as a inner join students as b
                                  on b.id=a.student_id
                                  inner join books as c on c.book_id=a.book_id 
                                  where a.book_return_date is NULL ";
                                  $result=mysqli_query($con,$sql);
                                  while($row=mysqli_fetch_assoc($result)){
                                      ?>
                                      <tr>
                                         <td><?=ucwords($row['fname'].' '.$row['lname'] )?></td> 
                                         <td><?=$row['roll'] ?></td> 
                                         <td><?=$row['book_name'] ?></td> 
                                         <td><?=$row['book_issue_date'] ?></td> 
                                         <td><?=$row['book_issue_time'] ?></td> 
                                         <td><a href="return_book.php?id=<?=$row['id'] ?>">Retrun Book</a></td> 

                                      </tr>
                                      <?php
                                  }

                                  ?>
                                      <tr>
                                         <td></td> 
                                      </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        <?php

        if(isset($_GET['id'])){
           
             $id=$_GET['id'];
             $date=date('d-m-y');
             
             $result= mysqli_query($con, "UPDATE issue_books SET book_return_date='$date' WHERE id='$id'");
          
             if($result){
                
                ?>
   <script type="text/javascript">
            alert("Book Return Successfully!.");
            javascript:history.go(-1);
     </script> 
                <?php
               
            
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
             
            // Close connection
            mysqli_close($con);
        }
        ?>        
      
           
<?php
require_once ('footer.php');
?> 