<!DOCTYPE html>
<html lang="en">
<?php require('/var/www/html/templates/header.php');?>
<script src="js/tagcanvas.min.js" type="text/javascript"></script>
<script type="text/javascript">
       window.onload = function() {
	     TagCanvas.Start('myCanvas','tags',{
                 textColour: '#ff0000',
	         outlineMethod: "none",
	         reverse: true,
	         depth: 0.8,
	         maxSpeed: 0.04
	     });
      };
</script>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
       <!-- Navigation -->
       <?php require('/var/www/html/templates/tech_nav.php');?>
       <!-- Navigation-->
       <div id="page-wrapper">
           <div id="containerfluid" class="container-fluid">
               <!-- Page Heading -->
               <div  class="col-md-12">
                   <h1 id="header" class="page-header">
                        Technologies <small>List</small>
                   </h1>
               </div>
               <div class="row">
                   <div id="technologies" class="col-md-12">
		       <canvas width="100" height="100" id="myCanvas"></canvas>
				<div id="tags">
				    <ul>
				        <li>
					    <a href="http://www.w3.org/html/logo/" target="_blank"><img src="images/html5_logo.png" style="width: 100px;"/></a>
					</li>
					<li>
                                            <a href="http://php.net/" target="_blank"><img src="images/php_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="http://www.linux.com/" target="_blank"><img src="images/linux_logo.png" style="width: 100px;"/></a>
                                        </li>
					<li>
                                            <a href="http://www.w3.org/standards/webdesign/script" target="_blank"><img src="images/javascript_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="http://www.w3.org/standards/techs/css#w3c_all" target="_blank"><img src="images/css3_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="http://getbootstrap.com/" target="_blank"><img src="images/bootstrap_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="https://linuxcontainers.org/" target="_blank"><img src="images/container_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="https://www.java.com/" target="_blank"><img src="images/java_logo.png" style="width: 100px;"/></a>
                                        </li>
                                        <li>
                                            <a href="http://www.apache.org/" target="_blank"><img src="images/apache_logo.png" style="width: 100px;"/></a>
                                        </li>

				    </ul>
				</div>
                   </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
       </div>
       <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Core JavaScript
    ================================================== -->
    <?php require('/var/www/html/templates/scripts.php');?>
    </body>
<script>

    // get viewport size
    getViewportSize = function() {
        return {
            height: window.outerHeight -266,
            width:  $("#technologies").width()
        };
    };

    // update canvas size
    updateSizes = function() {
        var viewportSize = getViewportSize();
        $('#myCanvas').width(viewportSize.width).height(viewportSize.height);
        $('#myCanvas').attr('width', viewportSize.width).attr('height', viewportSize.height);
    };

    // run on load
    updateSizes();

    // handle window resizing
    $(window).on('resize', function() {
        updateSizes();
    });
</script>

</html>
