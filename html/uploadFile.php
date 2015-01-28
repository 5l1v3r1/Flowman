<!DOCTYPE html>
<html lang="en">
<?php require('/var/www/html/templates/header.php');?>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
       <!-- Navigation -->
       <?php require('/var/www/html/templates/nav.php');?>
       <!-- Navigation-->
       <div id="page-wrapper">
           <div class="container-fluid">
               <!-- Page Heading -->
               <div class="col-md-12">
                   <h1 class="page-header">
                        Upload <small>Send your files</small>
                   </h1>
               </div>
               <div class="row">
                   <div class="col-md-12">
                     <form action="upload_file.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			   <div class="col-sm-offset-2">
    			   <label for="exampleInputFile">File input</label>
    			   <input type="file" id="exampleInputFile" name="file">
    			   <p class="help-block">Choose files to upload.</p><br />
			   <?php if($_GET["error"]==0 && isset($_GET["error"])){ ?>
				<div class="alert alert-danger col-sm-5" role="alert">
					ERROR.
				</div>
			   <?php } elseif($_GET["error"]==1){ ?>
				<div class="alert alert-danger col-sm-5" role="alert">
				File already exists.
				</div>
			   <?php } elseif($_GET["error"]==2){ ?>
                                <div class="alert alert-danger col-sm-5" role="alert">
				File is too large.
				</div>
			   <?php } ?>
			   </div>
  			</div>
			<div class="form-group">
			   <div class="col-sm-offset-2 col-sm-5">
		              <input class="btn btn-primary" type="submit" name="submit" value="Upload">
		           </div>
			</div>
		      </form>
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
</html>
