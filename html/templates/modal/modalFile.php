<table class="table table-hover">
<thead><tr><th>File name</th><th>Actions</th></tr></thead>
<tbody>
<?php
    $filesList = shell_exec("ls /var/www/html/upload/ | tr '\n' ':'");
    foreach (explode(':', $filesList) as $files){
        if($files == "")
            continue;
            echo ("<tr>");
            echo ("<td><i class=\"fa fa-fw fa-file-o\"></i> $files</a></td>");
            echo ("<td><a class='btn btn-default' data-dismiss='modal' onclick='insertFile(\"$files\")'><i class=\"fa fa-fw fa-check-square\"></i></a></td>");
            echo ("</tr>");
        }
?>
</tbody>
</table>
