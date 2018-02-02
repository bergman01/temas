<?php 
$directorio = opendir("../temas");

echo "<ul>";
while($archivo = readdir($directorio))
    {    
        if(is_dir($archivo))
        {
            echo "<li><a href='".$archivo."'>".$archivo."</a></li>";
        }
    }

echo "</ul>";

closedir($directorio);  
 ?>