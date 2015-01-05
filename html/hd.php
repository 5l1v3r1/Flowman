<!DOCTYPE html>
<html lang="en">
  <head>
      
       <?php require( 'templates/header.php');?>
    <?php require( 'config/conf.php');?>
      
  </head>

  <body>
      
       <?php require( 'templates/topbar.php');?>
    <?php require( 'templates/sidebar.php');?>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Place your content here.</p>
          		</div>
          	</div>
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

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