<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>list</title>
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th>sr.no</th>
                <th>category_id</th>
                <th>Name</th>
                <!-- <th>Movie name</th> -->
            </tr>
        </thead>
        <?php
        include_once "db.php";
        $records = mysqli_query($con,"select * from category");
        
        $index=1;
        ?>
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
