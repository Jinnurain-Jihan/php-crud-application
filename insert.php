<?php 
 include('connectdb.php');
if(isset($_POST["add"])){
    $name=$_POST["name"];
    $dept=$_POST["dept"];
    $mark=$_POST["mark"];
    $city=$_POST["city"];

    if($name=="" || empty($name)){
        header('location:index.php?msg=you need to fill in the name!');
    }else{
        $sql="INSERT INTO students(name,dept,mark,city)VALUES('$name','$dept','$mark','$city')";
        $query=mysqli_query($connect,$sql);

        if(!$query){
            die(mysqli_error($query));
        }else{
            header('location:index.php?insertmsg=your data has been added successfully');
        }

    }
}




?>