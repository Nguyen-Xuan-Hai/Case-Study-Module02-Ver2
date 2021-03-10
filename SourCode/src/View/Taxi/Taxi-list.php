<table class="table table-striped table-hover">
    <tr>
        <button class="btn btn-secondary btn-lg"><a href="index.php?page=Taxi-add" >ADD</a></button>
        <th>STT</th>
        <th>License_plates</th>
        <th>Model</th>
        <th>Year</th>
        <th>Type</th>
        <th>Color</th>
        <th>Status</th>
        <th>Driver_id</th>
        <th>Img</th>
    </tr>


    <?php foreach ($taxis as $key => $taxi): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $taxi['License_plates'] ?></td>
            <td><?php echo $taxi['Model'] ?></td>
            <td><?php echo $taxi['Year'] ?></td>
            <td><?php echo $taxi['Type'] ?></td>
            <td><?php echo $taxi['Color'] ?></td>
            <td><?php echo $taxi['Status'] ?></td>
            <td><?php echo $taxi['Driver_id'] ?></td>
            <td><img src="Image/<?php echo $taxi['Image'] ?>" style="width: 40px"></td>
            <td><a href="index.php?page=Taxi-delete&id=<?php echo $taxi['Taxi_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete|<a href="index.php?page=Taxi-update&id=<?php echo $taxi['Taxi_id'] ?>">Update</td>
<!--            <td><a href="index.php?page=Taxi-update&id=--><?php //echo $taxi['Taxi_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>