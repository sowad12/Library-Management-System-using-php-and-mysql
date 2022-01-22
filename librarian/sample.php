<?php
include('header.php');


print_r($_POST);


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
                                    <form class="form-horizontal">
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
                                            <label for="book_name" class="col-sm-4 control-label">Book Name</label>
                                            <div class="col-sm-8">
                                                <input type="book_name" class="form-control" id="" placeholder="Book Name" name="book_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_purchase_date" class="col-sm-4 control-label">Purchase Date</label>
                                            <div class="col-sm-8">
                                                <input type="book_purchase_date" class="form-control" id="" placeholder="Purchase Date" name="book_purchase_date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_price " class="col-sm-4 control-label">Book Price</label>
                                            <div class="col-sm-8">
                                                <input type="book_price " class="form-control" id="" placeholder="Book Price" name="book_price ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_qty" class="col-sm-4 control-label">Book Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="book_qty" class="form-control" id="" placeholder="Quantity" name="book_qty">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="available_qty" class="col-sm-4 control-label">Available Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="available_qty" class="form-control" id="" placeholder="Quantity" name="available_qty">
                                            </div>
                                        </div>
                                     
                                      
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-8">
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