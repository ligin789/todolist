<?php
include_once "./include/dbconnect.php";
class regClass{
    function regClass()
    {
        $this->dbconnect=new dbconnect();
    }
    function insert()
    {
        $sql="INSERT INTO `tbl_tasks`( `task_content`, `task_created_at`) VALUES ('$this->task_content','$this->date')";
        $ret=$this->dbconnect->query($sql);
        return $ret;
    }
    function view()
    {
        $selectSql="SELECT * FROM `tbl_tasks`";
        $ret=$this->dbconnect->query($selectSql);
        return $ret;
    }
    function delete()
    {
        $task_id=$this->delete_task;
        $deleteSql="UPDATE `tbl_tasks` SET task_status=2 WHERE task_id='$task_id'";
        $ret=$this->dbconnect->query($deleteSql);
        return $ret;
    }
    function complete()
    {
        $task_id=$this->finishtask;
        $finishtasksql="UPDATE `tbl_tasks` SET task_status=1 WHERE task_id='$task_id'";
        $ret=$this->dbconnect->query($finishtasksql);
        return $ret;
    }
}
