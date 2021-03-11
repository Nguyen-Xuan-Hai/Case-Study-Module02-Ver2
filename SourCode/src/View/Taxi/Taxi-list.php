<table class="table table-striped table-hover" style="text-align: center">
    <tr>
        <button class="btn btn-secondary btn-lg"><a href="index.php?page=Taxi-add" >ADD</a></button>
        <th>STT</th>
        <th>License_plates</th>
        <th>Model</th>
        <th>Year</th>
        <th>Type</th>
        <th>Color</th>
        <th>Status</th>
        <th>Driver</th>
        <th>F_name</th>
        <th>L_name</th>
        <th>Img</th>
        <th></th>
    </tr>


    <?php foreach ($taxis as $key => $taxi): ?>
        <tr class="col-md-3 col">
            <td class="col-1"><?php echo ++$key ?></td>
            <td class="col-1"><?php echo $taxi['License_plates'] ?></td>
            <td class="col-1"><?php echo $taxi['Model'] ?></td>
            <td class="col-1"><?php echo $taxi['Year'] ?></td>
            <td class="col-1"><?php echo $taxi['Type'] ?></td>
            <td class="col-1"><?php echo $taxi['Color'] ?></td>
            <td class="col-1"><?php echo $taxi['Status'] ?></td>
            <td class="col-1"><?php echo $taxi['Driver_id'] ?></td>
            <td class="col-1"><?php echo $taxi['F_name'] ?></td>
            <td class="col-1"><?php echo $taxi['L_name'] ?></td>
            <td class="col-1"><img src="Image/<?php echo $taxi['Image'] ?>" style="width: 40px"></td>
            <td class="col-1"><a style="margin: 0 5px" class="btn btn-danger btn-sm" href="index.php?page=Taxi-delete&id=<?php echo $taxi['Taxi_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete
                    <a style="margin: 0 5px" class="btn btn-warning btn-sm" href="index.php?page=Taxi-update&id=<?php echo $taxi['Taxi_id'] ?>">Update</td>
<!--            <td><a href="index.php?page=Taxi-update&id=--><?php //echo $taxi['Taxi_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>