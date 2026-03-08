<?php

include "config/database.php";

echo "CMS Project Working Successfully <br>";

if ($conn) {
    echo "Database Connected Successfully";
} else {
    
    echo "Database Connection Failed";
}

?>