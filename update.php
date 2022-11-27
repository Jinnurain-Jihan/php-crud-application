<?php include('header.php')?>
<?php include('connectdb.php')?>
<?php 
    if(isset($_GET['key'])){
        $id=$_GET['key'];
        $sql="SELECT * FROM students where id='$id'";
        $query=mysqli_query($connect,$sql);
        if(!$query){
            echo die(mysqli_error($query));
        }else{
            $row=mysqli_fetch_assoc($query);

            // print_r($row);
        }
    }
?>
    <?php 
        if(isset($_POST['update'])){
            $name=$_POST['name'];
            $dept=$_POST['dept'];
            $mark=$_POST['mark'];
            $city=$_POST['city'];
            if(isset($_GET['newid'])){
                $newid=$_GET['newid'];
            }
            $sql="UPDATE students SET name='$name',dept='$dept',mark='$mark',city='$city' WHERE id='$newid'";
            $query=mysqli_query($connect,$sql);
            if(!$query){
                echo die(mysqli_error($query));
            }else{
                header('location:index.php?updatemsg=you have successfully update the data');
            }
        }
    
    ?>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="update.php?newid=<?php echo $id ?>" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
                </div>
                <div class="form-group">
                    <label for="dept">Dept</label>
                    <input type="text" name="dept" class="form-control" value="<?php echo $row['dept']?>">
                </div>
                <div class="form-group">
                    <label for="">Mark</label>
                    <input type="text" name="mark" class="form-control" value="<?php echo $row['mark']?>">
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" name="city" class="form-control" value="<?php echo $row['city']?>">
                </div>
                <input type="submit" class="btn btn-success mt-3" name="update" value="UPDATE">
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>






<?php include('footer.php')?>