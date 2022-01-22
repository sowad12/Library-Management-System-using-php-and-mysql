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
                        <?php
                     $sql="select *from students";
                     $result=mysqli_query($con,$sql);
                     $total=mysqli_num_rows($result);   
                        ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="students.php">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-users"></i><?= $total;?></h1>
                                    <h4 class="subtitle color-darker-1">TOTAL STUDENTS</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                     $sql="select *from libraian";
                     $result=mysqli_query($con,$sql);
                     $total=mysqli_num_rows($result);   
                        ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="#">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-users"></i><?= $total;?></h1>
                                    <h4 class="subtitle color-darker-1">TOTAL LIBRAIANS</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                     $sql="select *from books";
                     $result=mysqli_query($con,$sql);
                     $total=mysqli_num_rows($result);   
                        ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="#">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-book"></i><?= $total;?></h1>
                                    <h4 class="subtitle color-darker-1">TOTAL BOOKS</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
<?php
require_once ('footer.php');
?> 