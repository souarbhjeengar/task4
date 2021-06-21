<?php
include_once "header.php";
include_once "db.php";
$name= rtrim(basename($_SERVER['PHP_SELF']),".php");

        $records = mysqli_query($con,"select * from $name");
        
        $index=1;
        ?>

<!-- main containt -->
<div class="container">
    <table class="table table-striped table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th>sr.no</th>
                <th>Actor_id</th>
                <th>Name</th>
                <th>Movie name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            while($data = mysqli_fetch_array($records))
            {?>
                <td><?=$index++;?></td>
                <td><?php echo $data['actor_id'];?></td>
                <td><?php echo $data['first_name'];?><?=" "?><?php echo $data['last_name'];?></td>

                <td>idiots</td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot class="thead-dark">
        <tr>
                <th>sr.no</th>
                <th>Actor_id</th>
                <th>Name</th>
                <th>Movie name</th>
            </tr>
        </tfoot>
        </table>
<?php
include_once "footer.php";?>