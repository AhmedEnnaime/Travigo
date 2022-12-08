<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/head.php'; ?>

<body>

    <?php require APPROOT . '/views/includes/nav.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[ daily sales section ] start-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Number of clients</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><?php foreach ($userCount as $users) {
                                                                                                            echo $users;
                                                                                                        } ?></h3>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Number of packages sold</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><?php foreach ($solds as $sold) {
                                                                                                                echo $sold['sold'];
                                                                                                            }  ?></h3>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Earnings</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0">$ <?php foreach ($earnings as $earning) {
                                                                                                                echo $earning['earnings'];
                                                                                                            }  ?></h3>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Travels available</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <?php
                                                        foreach ($products as $product) { ?>
                                                            <tr class="unread">
                                                                <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                                                <td>
                                                                    <h6 class="mb-1"><?php echo $product['title']; ?></h6>
                                                                    <p class="m-0"><?php echo $product['destination']; ?></p>
                                                                </td>
                                                                <td>
                                                                    <h6 class="text-muted"><?php echo $product['date_depart']; ?></h6>
                                                                </td>
                                                                <td>
                                                                    <form action="./delete.php" method="POST">
                                                                        <input name="id" type="hidden" value="<?php echo $product['id']; ?>">
                                                                        <input style="border: none ;" type="submit" class="label theme-bg2 text-white f-12" value="Delete">

                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <form action="./update.php" method="POST">
                                                                        <input name="id" type="hidden" value="<?php echo $product['id']; ?>">
                                                                        <input style="border: none;" type="submit" class="label theme-bg text-white f-12" value="Update">
                                                                    </form>

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
                                <!--[ Recent Users ] end-->

                                <!-- [ statistics year chart ] start -->
                                <div class="col-xl-4 col-md-6">

                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-zap f-30 text-c-green"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300"><?php foreach ($expensiveProduct as $exp) {
                                                                            echo $exp['title'];
                                                                        } ?></h3>
                                                    <span class="d-block text-uppercase">MOST EXPENSIVE PACK</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-map-pin f-30 text-c-blue"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300"><?php foreach ($productCount as $count) {
                                                                            echo $count;
                                                                        } ?></h3>
                                                    <span class="d-block text-uppercase">TOTAL LOCATIONS</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ statistics year chart ] end -->
                                <!--[social-media section] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card">
                                        <div style="width: 700px;">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                        <script>
                                            <?php
                                            foreach ($sellings as $selling) {
                                                $sell[] = $selling['title'];
                                                $selledTimes[] =  $selling['selledProducts'];
                                            }
                                            ?>
                                            const labels = <?php echo json_encode($sell); ?>;
                                            const data = {
                                                labels: labels,
                                                datasets: [{
                                                    label: 'My First Dataset',
                                                    data: <?php echo json_encode($selledTimes); ?>,
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            };
                                            const config = {
                                                type: 'bar',
                                                data: data,
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                },
                                            };
                                            const myChart = new Chart(
                                                document.getElementById('myChart'),
                                                config
                                            );
                                        </script>

                                    </div>

                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div style="width: 300px;">
                                            <canvas id="myCha"></canvas>
                                        </div>
                                        <script>
                                            <?php
                                            foreach ($clients as $client) {
                                                $cl[] = $client['name'];
                                                $orders[] = $client['clients'];
                                            }
                                            ?>
                                            const ctx = document.getElementById('myCha');

                                            new Chart(ctx, {
                                                type: 'doughnut',
                                                data: {
                                                    labels: <?php echo json_encode($cl); ?>,
                                                    datasets: [{
                                                        label: 'Number of orders',
                                                        data: <?php echo json_encode($orders); ?>,
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {

                                                    }
                                                }

                                            });
                                        </script>

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