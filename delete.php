<?php include('connectdb.php')?>
<?php 
    if(isset($_GET['key'])){
        $id=$_GET['key'];
        $sql="delete from students where id='$id'";
        $query=mysqli_query($connect,$sql);
        if(!$query){
            echo die(mysqli_error($query));
        }else{
           header('location:index.php?deletemsg=you have deleted the record');
        }
    }
?>

