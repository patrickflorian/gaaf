<?php
if(isset($_GET['e_id'])&& isset($_GET['edit'])){
    include_once "edit.php";
}else include_once "list.php";
?>
    
    