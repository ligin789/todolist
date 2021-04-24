<?php
class dbconnect{
    var $conn;
    function dbconnect()
    {
        $this->conn=new mysqli("localhost","root","","todolist");
    }
    function query($sql)
    {
        $return=mysqli_query($this->conn,$sql);
        return $return;
    }
}
?>