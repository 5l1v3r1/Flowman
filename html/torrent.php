<!DOCTYPE html>
<html lang="en">

<head>

    <?php require( 'templates/header.php');?>
    <?php require( 'config/conf.php');?>

</head>

<body>

    <?php require( 'templates/topbar.php');?>
    <?php require( 'templates/sidebar.php');?>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <iframe style="border:none" id="iframetorrent" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="<?php echo $TORRENT_CLIENT_URL; ?>"></iframe>
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

    <script>
        document.getElementById("iframetorrent").setAttribute("height", window.innerHeight - 100 + "px");
    </script>


</body>

</html>

</html>