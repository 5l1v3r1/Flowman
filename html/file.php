<!DOCTYPE html>
<html lang="en">

<?php require('/var/www/html/templates/header.php');?>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Navigation -->
        <?php require('/var/www/html/templates/file_nav.php');?>
        <!-- Navigation-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="col-md-12">
                    <h1 class="page-header">
                         Result <small>Download file</small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
			   <table class="table table-hover">
			   <thead><tr><th>File name</th><th>Date</th><th>Delete</th><th>Download</th></tr></thead>
			   <tbody>
      			   <?php
                                $filesList = shell_exec("ls /var/www/html/upload/ | tr '\n' ';'");
                                foreach (explode(';', $filesList) as $files){
                                    if($files == "")
				    continue;
					
				    $fileDate = shell_exec("date -r /var/www/html/upload/$files");				    
				    echo ("<tr>");
                                    echo ("<td><i class=\"fa fa-fw fa-file-o\"></i><a href=\"/upload/$files\"> $files</a></td>"); 
				    echo ("<td><i class=\"fa fa-fw fa-clock-o\"></i>$fileDate</td>");                                 
				    echo ("<td><a class='btn-default' href=\"/delete.php?delete=$files\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-square fa-stack-2x\"></i><i class=\"fa fa-fw fa-trash-o fa-stack-1x fa-inverse\"></i></span></a></td>");
				    echo ("<td><a class='btn-default' href=\"/fileDownload.php?download=$files\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-square fa-stack-2x\"></i><i class=\"fa fa-fw fa-download fa-stack-1x fa-inverse\"></i></span></a></td>"); 
				    echo ("</tr>");
				}
                           ?>
			   </tbody>
			   </table>
                           <a class="btn btn-danger" href="/deleteAll.php" >Delete all</a>
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
