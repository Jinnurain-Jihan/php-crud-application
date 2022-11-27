<?php include('header.php')?>
<?php include('connectdb.php')?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="box">
        <?php if(isset($_GET['msg'])){
            echo "<h6>".$_GET['msg']."</h6>";
        }
        ?>
         <?php if(isset($_GET['insertmsg'])){
            echo "<h6>".$_GET['insertmsg']."</h6>";
            }
        ?>
        <?php if(isset($_GET['updatemsg'])){
            echo "<h6>".$_GET['updatemsg']."</h6>";
            }
        ?>
        <?php if(isset($_GET['deletemsg'])){
            echo "<h6>".$_GET['deletemsg']."</h6>";
            }
        ?>
        <h2>ALL STUDENTS</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
    </div>
            
            <?php 
                    $sql="SELECT * FROM students";
                    $query=mysqli_query($connect,$sql);
                    echo "<table class='table table-hover table-bordered table-striped'>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Dept</th>
                    <th>Mark</th>
                    <th>City</th>
                    <th>Update</th>
                    <th>Delete</th>
                    </tr>";
                    while($data=mysqli_fetch_assoc($query)){
                    $id=$data["id"];
                    $name=$data["name"];
                    $dept=$data["dept"];
                    $mark=$data["mark"];
                    $city=$data["city"];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$dept</td>";
                    echo "<td>$mark</td>";
                    echo "<td>$city</td>";
                    echo "<td><a href='update.php?key=$id' class='btn btn-success'</a>Update</td>";
                    echo "<td><a href='delete.php?key=$id' class='btn btn-danger'</a>Delete</td>";
                    echo "</tr>";
                    
                     }
                    echo "</table>";
                ?>
    <!-- Modal -->
<form action="insert.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dept">Dept</label>
                        <input type="text" name="dept" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mark</label>
                        <input type="text" name="mark" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add" value="ADD">
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer.php')?>