<?php
if(isset($_POST['finishtask']))
{
include "./registerclass.php";
$obj=new regClass();
$finishtask=$_POST['finishtask'];
$obj->finishtask=$finishtask;
$return=$obj->complete();
if($return)
{
    echo "Task marked as complete";
}
else{
    echo "Task completion failed";
}
}

?>