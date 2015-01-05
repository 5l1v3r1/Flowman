<!DOCTYPE html>
<html lang="en">

<head>

    <?php require( 'templates/header.php');?>
    <?php require( 'config/conf.php');?>

</head>

<body>

    <section id="container">

        <?php require( 'templates/topbar.php');?>
        <?php require( 'templates/sidebar.php');?>

        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-6">
                        <div class="row mtbox">
                            <a href="hd.php">
                                <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                                    <div class="box1">
                                        <span><i class="fa fa-hdd-o"></i></span>
                                        <h3><?php echo $HD_QUANTITY ?> </h3>
                                    </div>
                                    <p>You have
                                        <?php echo $HD_QUANTITY ?> HD(s) Installed</p>
                                </div>
                            </a>

                            <a href="download.php">
                                <div class="col-md-2 col-sm-2 box0">
                                    <div class="box1">
                                        <span><i class="fa fa-download"></i></span>
                                        <h3>4</h3>
                                    </div>
                                    <p>4 download(s) finished</p>
                                </div>
                            </a>

                        </div>
                        <!-- /row mt -->
                        <div class="row mtbox">

                            <div class="col-md-6 col-sm-6 mb">
                                <a href="hd.php">
                                    <div class="darkblue-panel pn donut-chart">
                                        <div class="darkblue-header">
                                            <h5>DISK SPACE</h5>
                                        </div>
                                        <canvas id="hd-chart" height="150" width="150"></canvas>
                                        <footer>
                                            <div class="pull-left">
                                                <h5><i class="fa fa-hdd-o"></i> <?php echo sprintf('%.2f',$HD_TOTAL_SPACE); ?> GB</h5>
                                            </div>
                                            <div class="pull-right">
                                                <h5><?php echo sprintf('%.2f', ($HD_TOTAL_USED_SPACE / $HD_TOTAL_SPACE) * 100  ); ?> % Used</h5>
                                            </div>
                                        </footer>
                                    </div>
                                    <!-- /darkblue panel -->
                                </a>
                            </div>
                            <!-- /col-md-4 -->

                            <div class="col-md-6 col-sm-6 hidden-lg mb">
                                <a href="<?php echo $SHELL_IN_A_BOX_URL; ?>" target="_blank">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <h5>SHELL</h5>
                                        </div>
                                        <h1 class="mt"><i class="fa fa-terminal fa-3x"></i></h1>
                                        <footer>
                                            <div class="centered">
                                                <h5>Server terminal</h5>
                                            </div>
                                        </footer>
                                    </div>
                                    <! -- /darkblue panel -->
                                </a>
                            </div>
                            <!-- /col-md-4 -->

                        </div>
                        <!-- /row mt -->
                    </div>
                    <!-- /col-lg-6 -->


                    <div class="col-lg-6 visible-lg">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> _ SHELL</h4>
                            <div class="panel-body text-center">
                                <iframe style="border:none" id="shellinaboxframe" src="<?php echo $SHELL_IN_A_BOX_URL; ?>" class="col-md-12"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- /col-lg-6 -->
                </div>
                </div>
            </section>
            <! --/wrapper -->
        </section>
        <!-- /MAIN CONTENT -->

        <!--main content end-->

        <?php require( 'templates/footer.php');?>

    </section>

    <?php require( 'templates/scripts.php');?>

    <!--script for this page-->

    <script>
        document.getElementById("shellinaboxframe").setAttribute("height", $("#sidebar").innerHeight() - 250 + "px");

        var free = <?php echo $HD_TOTAL_FREE_SPACE ?> ;
        var used = <?php echo $HD_TOTAL_USED_SPACE ?> ;
        free = parseFloat(free.toFixed(2));
        used = parseFloat(used.toFixed(2))

         var hdData = [
            {
                value: used,
                color: "#e56060",
                highlight: "#FF6B6B",
                label: "Used"
            },
            {
                value: free,
                color: "#fbfbfb",
                highlight: "#ffffff",
                label: "Free"
            }
        ];
        var hdChart = new Chart(document.getElementById("hd-chart").getContext("2d")).Doughnut(hdData, {
            animationEasing: "easeOutQuart",
            tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>GB"

        });
    </script>

</body>

</html>
