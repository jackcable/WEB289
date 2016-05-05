<?php 
	if (isset($_SESSION['admin']) || isset($_SESSION['member'])) {
        include'../view/admin_header.php';
        include'../view/member_header.php';
    }

?>