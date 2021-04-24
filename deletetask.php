<?php
if(isset($_POST['delete_task']))
{
include "./registerclass.php";
$obj=new regClass();
$delete_task=$_POST['delete_task'];
$obj->delete_task=$delete_task;
$return=$obj->delete();
if($return)
{
    echo "Delete Succes";
}
else{
    echo "Delete Failed";
}
}

?>