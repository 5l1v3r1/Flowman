<!DOCTYPE html>
<html lang="en">

<?php require('/var/www/html/templates/header.php');?>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Navigation -->
	<?php require('/var/www/html/templates/dashboard_nav.php');?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="col-md-12">
                    <h1 class="page-header">
                         Drawing Board <small>Workflow Diagram</small>
                     </h1>
                </div>
                <div class="row">
                    <div id="DrawingBoard" class="col-md-12">
                        <div id="paper" class="col-md-12"></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <div>
                <form hidden method="POST" action="post.php" id="postForm">
                    <textarea name="xmlTextArea" id="xmlTextArea"></textarea>
                </form>
            </div>
            <!-- /#post -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Core JavaScript
    ================================================== -->

    <?php require('/var/www/html/templates/scripts.php');?>
    <script src="js/lodash.js"></script>
    <script src="js/backbone.js"></script>

    <script src="js/joint/core.js"></script>
    <script src="js/joint/vectorizer.js"></script>
    <script src="js/joint/geometry.js"></script>

    <script src="js/joint/joint.dia.graph.js"></script>

    <script src="js/joint/joint.dia.cell.js"></script>
    <script src="js/joint/joint.dia.element.js"></script>
    <script src="js/joint/joint.dia.link.js"></script>
    <script src="js/joint/joint.dia.paper.js"></script>

    <script src="js/joint/plugins/joint.shapes.basic.js"></script>

    <script src="js/joint/plugins/connectors/joint.connectors.normal.js"></script>

    <script src="js/filesaver/FileSaver.js"></script>

    <script src="js/amphitrite.js"></script>
    <script src="js/customNodes.js"></script>

    <!-- ================================================ -->

</body>
</html>
