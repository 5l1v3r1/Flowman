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
                         Result <small>Download file</small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            $xmlActivity = "";
            $xmlTransition = "";
            $varJSON = json_decode($_POST["xmlTextArea"], true);
            $size = count($varJSON["cells"]);
            $xmlActivity = "<WorkflowProcess>";
            $xmlActivity .= "<Activities>";
            $xmlTransition .= "<Transitions>";
            for($i=0; $i<$size; $i++){
                if($varJSON["cells"][$i]["type"] == "basic.Image"){
                    $id = $varJSON["cells"][$i]["id"];
                    $name = $varJSON["cells"][$i]["name"];
                    $activity = $varJSON["cells"][$i]["activity"];
                    $xmlActivity .= "<Activity Id=\"" . $id . "\" Name=\"" . $name . "\">";
                    $xmlActivity .= "<Implementation>" . $activity . "</Implementation>";
                    $xmlActivity .= "</Activity>";               
                }
                if($varJSON["cells"][$i]["type"] == "link"){
                    $source = $varJSON["cells"][$i]["source"]["id"];
                    $target = $varJSON["cells"][$i]["target"]["id"];
                    $xmlTransition .= "<Transition From=\"" . $source . "\" To=\"" . $target . "\" />";
                }
            }   
            $xmlActivity .= "</Activities>";
            $xmlTransition .= "</Transitions>";
            $xmlTransition .= "</WorkflowProcess>";

	    // TODO create account system
            $xmlPath = "/var/www/html/upload/file.xml";
            $myfile = fopen($xmlPath, "w") or die("Unable to open file!");
            fwrite($myfile, $xmlActivity . $xmlTransition);
            fclose($myfile);
            exec("poseidon " . $xmlPath, $output);
	     
	    // print download link
	    $resultCommand = explode(" ", $output[count($output)-1]);
	    $last = count($resultCommand)-1;
	    $result = explode("/ubuntu/", $resultCommand[$last])[1];

            echo "<a href='/$result' class='btn btn-success'><i class='fa fa-download'></i>Download</a>";

            ?>
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
