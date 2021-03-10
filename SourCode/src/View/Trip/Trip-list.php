<table class="table table-striped table-hover">
    <tr>
<!--        <button class="btn btn-secondary btn-lg" ><a href="index.php?page=User-add">Add</a></button>-->
        <th>STT</th>
        <th>Trip_date</th>
        <th>Description</th>
        <th>Driver_id</th>
        <th>Usr_id</th>
        <th>Taxi_id</th>
        <th>Strt_time</th>
        <th>End_time</th>
        <th>Location_start</th>
        <th>Location_end</th>
        <th>Customer_number</th>
        <th>Status</th>
    </tr>


    <?php foreach ($trips as $key => $trip): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $trip['Trip_date'] ?></td>
            <td><?php echo $trip['Description'] ?></td>
            <td><?php echo $trip['Driver_id'] ?></td>
            <td><?php echo $trip['Usr_id'] ?></td>
            <td><?php echo $trip['Taxi_id'] ?></td>
            <td><?php echo $trip['Strt_time'] ?></td>
            <td><?php echo $trip['End_time'] ?></td>
            <td><?php echo $trip['Location_start'] ?></td>
            <td><?php echo $trip['Location_end'] ?></td>
            <td><?php echo $trip['Customer_number'] ?></td>
            <td><?php echo $trip['Status'] ?></td>
            <td><a href="index.php?page=Trip-delete&id=<?php echo $trip['Trip_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete|
                    <a href="index.php?page=Trip-update&id=<?php echo $trip['Trip_id'] ?>">Update</td>
            <!--            <td><a href="index.php?page=User-update&id=--><?php //echo $user['Usr_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>