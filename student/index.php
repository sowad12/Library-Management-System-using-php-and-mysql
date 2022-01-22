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
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>ALL ISSUE BOOKS</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="table-bordered data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>BOOK NAME</th>
                                        <th>BOOK ISSUE DATE</th>
                                        <th>BOOK ISSUE TIME</th>
                                        
                                    </tr>
                                    </thead>
                                  <tbody>
                                      <?php
                                        $student_id=$_SESSION['student_id'];
                                        $sql="select book_issue_time,book_issue_date,books.book_name from books 
                                        inner join issue_books on issue_books.book_id=books.book_id
                                         where issue_books.student_id='$student_id'";
                                         $result=mysqli_query($con,$sql);
                                        while( $row=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                            <td><?=$row['book_name'] ?></td>
                                            <td><?=date('d-M-Y',strtotime($row['book_issue_date']) )?></td>
                                            <td><?=$row['book_issue_time'] ?></td>
                                            </tr>
                                            <?php
                                        }
                                       
                                      ?>
                                      
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
<?php
require_once ('footer.php');
?> 