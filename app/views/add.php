<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/head.php'; ?>

<body>
    <?php require APPROOT . '/views/includes/nav.php'; ?>

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Form Elements</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php"><i class="feather icon-home"></i></a></li>

                                        <li class="breadcrumb-item"><a href="javascript:">Add travel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add travel pack</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5>Fill the informations</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Title</label>
                                                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Destination</label>
                                                            <input type="text" class="form-control" name="destination" id="exampleInputPassword1" placeholder="Enter destination">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Image</label>
                                                            <input type="file" class="form-control" name="media" id="exampleInputPassword1" placeholder="Enter destination">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date depart</label>
                                                            <input type="date" name="date_depart" class="form-control" placeholder="date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Price</label>
                                                            <input type="number" name="price" class="form-control" id="exampleFormControlSelect1" placeholder="Enter price">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Places availables</label>
                                                            <input type="number" name="places_availables" class="form-control" id="exampleFormControlSelect1" placeholder="Enter places availables">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>

                                                        <button type="submit" name="add" class="btn btn-primary">Add</button>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Required Js -->
        <script src="<?php echo URLROOT; ?>/js/vendor-all.min.js"></script>
        <script src="<?php echo URLROOT; ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo URLROOT; ?>/js/pcoded.min.js"></script>

</body>

</html>