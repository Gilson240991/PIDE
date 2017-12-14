<?php 	
session_start();
if(isset($_SESSION['key'])){
session_destroy();
header('Location: index.php');
}
