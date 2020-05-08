<?php 
    $connection = mysqli_connect("localhost","root","","jimkhan");  
    if(isset($_POST['ocean']))
    {
        $query="SELECT * FROM blogmanager WHERE categories='ocean'";
    }
    else if(isset($_POST['forest']))
    {
        $query="SELECT * FROM blogmanager WHERE categories='forest'";
    }
    else if(isset($_POST['animals']))
    {
        $query="SELECT * FROM blogmanager WHERE categories='animals'";
    }
    else{
        $query="SELECT * FROM blogmanager";
    }
?>