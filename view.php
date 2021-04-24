<?php
if(isset($_POST['fetchData']))
{
    include "./registerclass.php";
    $obj=new regClass();
    $value=$obj->view();
    if ($value->num_rows !=0) {
        $count=0;
        echo "<ul class='list-group col-8 mx-auto'>
        <h2 class='mt-5 mx-auto mb-4'>Heloo My task Manager</h2>";
        while($viewData = $value->fetch_assoc()) {
            if($viewData['task_status']==1)
            {
                $count++;
                echo "<li class='list-group-item success' aria-current='true'>".ucwords($viewData['task_content'])." 
                <button class='btn btn-secondary m-2 pull-right'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                <button class='btn btn-danger m-2 float-right'><i class='fa fa-trash-o' aria-hidden='true'></i></button></li>";
            }
            else if($viewData['task_status']==0){
                $count++;
                echo "<li class='list-group-item' aria-current='true'>".ucwords($viewData['task_content'])."
                <button class='btn btn-success m-2 pull-right'  value=".$viewData['task_content']."><i class='fa fa-check' aria-hidden='true'></i></button>
                <button class='btn btn-secondary m-2 pull-right' value=".$viewData['task_content']."><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                <button value=".$viewData['task_id']." onclick='deletetask(this)' class='btn btn-danger m-2 float-right'><i class='fa fa-trash-o' aria-hidden='true'></i></button></li>";
            }
        }
        if($count==0)
        {
        
            echo "<button class='btn btn-primary' onclick='addnew()'>Add new Task</button>";
         }
    }
    
    
}
?>