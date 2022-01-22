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
                    <h4 class="section-subtitle"><b>ALL STUDENTS INFORMATION</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="table-bordered data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>STUDENT NAME</th>
                                        <th>ROLL</th>
                                        <th>REGISTRATION_NO</th>
                                        <th>EMAIL</th>
                                        <th>USERNAME</th>
                                        <th>PHONE</th>
                                    </tr>
                                    </thead>
                                  <tbody>
                                  <?php
                                  $sql='select *from students';
                                  $result=mysqli_query($con,$sql);
                                  while($row=mysqli_fetch_assoc($result)){
                                      ?>
                                      <tr>
                                         <td><?=ucwords($row['fname'].' '.$row['lname'] )?></td> 
                                         <td><?=$row['roll'] ?></td> 
                                         <td><?=$row['reg'] ?></td> 
                                         <td><?=$row['email'] ?></td> 
                                         <td><?=$row['username'] ?></td> 
                                         <td><?=$row['phone'] ?></td> 

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
require_once ('footer.php');
?> 