<?php
if(isset($_POST['task_content']))
{
include "./registerclass.php";
$obj=new regClass();
$task_content=$_POST['task_content'];
$date=date("Y-m-d");
$obj->task_content=$task_content;
$obj->date=$date;
$return=$obj->insert();
if($return==True)
{
    echo "Insertion Sucess";
}
else{
    echo "Insertion Failed";
}
}

?>