<?php
require_once 'config/database.php';

if ($database_connected) {
    echo "CMS Project Working Successfully<br>";
    echo "Database Connected";
} else {
    echo "CMS Project Working Successfully<br>";
    echo "Database Connection Failed";
}
?>