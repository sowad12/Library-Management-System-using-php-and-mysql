<?php
require_once ('header.php');
?> 
               <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Manange Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>MANAGE BOOKS</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="table-bordered data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>BOOK NAME</th>
                                        <th>AUTHOR NAME</th>
                                        <th>BOOK PUBLICATION DATE</th>
                                        <th>BOOK QUANTITY</th>
                                        <th>BOOK AVAILABE QUANTITY</th>
                                        <th>ACTION</th>
                                       
                                    </tr>
                                    </thead>
                                  <tbody>
                                  <?php
                                  $sql='select *from books';
                                  $result=mysqli_query($con,$sql);
                                  while($row=mysqli_fetch_assoc($result)){
                                      ?>
                                      <tr>
                                         <td><?=ucwords($row['book_name'])?></td> 
                                         <td><?=ucwords($row['book_author'])?></td> 
                                         <td><?=ucwords($row['book_purchase_date'])?></td> 
                                         <td><?=ucwords($row['book_qty'])?></td> 
                                         <td><?=ucwords($row['available_qty'])?></td> 
                                         <td>
                                     <a href="edit.php?id=<?php echo $row['book_id']; ?>"class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                      <a href="delete.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                
                                         </td> 
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