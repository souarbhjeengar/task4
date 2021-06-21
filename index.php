<?php
include_once "header.php";
include_once "db.php";
$records = mysqli_query($con,"SHOW TABLES");
$data = mysqli_fetch_assoc($records);
echo "<pre>";
$name= rtrim(basename($_SERVER['PHP_SELF']),".php");
echo $name;
// print_r($data);
?>
<table class="table table-light">
    <thead class="thead-dark">
        <tr>
            <th>Sr.NO</th>
            <th>Table Name</th>
            <th>Redirect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
            while($data = mysqli_fetch_array($records))
            {?>
            <td><?$i=$i++;?></td>
            <td><?php echo $data['Tables_in_sakila'];?></td>

<?php }?>
        </tr>
    </tbody>
    <tfoot class="thead-dark">
        <tr>
        
            <th>Sr.NO</th>
            <th>Table Name</th>
            <th>Redirect</th>
        </tr>
    </tfoot>
</table>
<?php
include_once "footer.php";?>