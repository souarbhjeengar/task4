<?php
include_once "header.php";
include_once "db.php";
$name= rtrim(basename($_SERVER['PHP_SELF']),".php");

        $records = mysqli_query($con,"select * from $name");
        
        $index=1;
        ?><table class="table table-striped table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th>sr.no</th>
                <th>category_id</th>
                <th>Name</th>
                <!-- <th>Movie name</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            while($data = mysqli_fetch_array($records))
            {?>
                <td><?=$index++;?></td>
                <td><?php echo $data['category_id'];?></td>
                <td><?php echo $data['name'];?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot class="thead-dark">
        <tr>
        <th>sr.no</th>
                <th>category_id</th>
                <th>Name</th>
            </tr>
        </tfoot>
        
    </table></div>
</body>
</html>
