       <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="fa-adjust"></i> Flowmanager</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
	        <li><a href="file.php"><i class="fa fa-fw fa-file"></i> Files</a></li>
                <li><a href="#" onclick="sendXML()"><i class="fa fa-fw fa-play"></i> Run</a></li>
                <!-- Options -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-spin"></i> Options <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" onclick="modalDownload()" ><i class="fa fa-fw fa-download"></i> Download File</a>
                        </li>
                        <li>
                            <a href="#" onclick="modalUpload()"><i class="fa fa-fw fa-upload"></i> Upload File</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" onclick="testConnection()"><i class="fa fa-fw fa-arrows-h"></i> Test Nodes</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-square-o"></i> Clear Nodes</a>
                        </li>
                    </ul>
                </li>
                <li><a href="technology.php"><i class="fa fa-fw fa-lightbulb-o"></i> Technology</a></li>
                <!-- End Login -->
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a class="active"><i class="fa fa-fw fa-wrench"></i> Workbench</a>
                    </li>
                    <li>
                        <a href="#" onclick="input()"><i class="fa fa-fw fa-toggle-down"></i>Input</a>
                        <a href="#" onclick="file()"><i class="fa fa-fw fa-file-o"></i>File</a>

                        <a href="#" onclick="addition()">+ Addition</a>
                        <a href="#" onclick="subtraction()">- Subtraction</a>
                        <a href="#" onclick="multiplication()">* Multiplication</a>
                        <a href="#" onclick="division()">/ Division</a>
                        <a href="#" onclick="result()">= Result</a>
			<a href="#" onclick="matrix()"># Matrix(2)</a>
			<a href="#" onclick="FAKE_SHIT_QUE_NAO_FUNCIONA_SERVE_SOMENTE_PRA_SCREENSHOT()"># Matrix(4)</a>
			<a href="#" onclick="FAKE_SHIT_QUE_NAO_FUNCIONA_SERVE_SOMENTE_PRA_SCREENSHOT()"># Matrix(8)</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
