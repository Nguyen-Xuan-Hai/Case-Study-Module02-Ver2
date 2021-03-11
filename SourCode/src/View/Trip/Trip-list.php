<table class="table table-striped table-hover" style="text-align: center">
    <tr>
<!--        <button class="btn btn-secondary btn-lg" ><a href="index.php?page=User-add">Add</a></button>-->
        <th>STT</th>
        <th>Trip_date</th>
        <th>Description</th>
        <th>Driver</th>
        <th>User</th>
        <th>Taxi</th>
        <th>Strt_time</th>
        <th>End_time</th>
        <th>Location_start</th>
        <th>Location_end</th>
        <th>Customer_number</th>
        <th>Status</th>
        <th></th>
    </tr>


    <?php foreach ($trips as $key => $trip): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $trip['Trip_date'] ?></td>
            <td><?php echo $trip['Description'] ?></td>
            <td>
                <a href="index.php?page=Bill-add">
                    <?php echo "CD-".$trip['Driver_id'] ?>
                </a>
            </td>
            <td>
                <a href="index.php?page=Bill-details&id=<?php echo $trip['Usr_id'] ?>">
                    <?php echo "CD-".$trip['Usr_id'] ?>
                </a>
            </td>
            <td>
                <a href="index.php?page=Bill-list&id=<?php echo $trip['Taxi_id'] ?>">
                    <?php echo "CD-".$trip['Taxi_id'] ?>
                </a>
            </td>
            <td><?php echo $trip['Strt_time'] ?></td>
            <td><?php echo $trip['End_time'] ?></td>
            <td><?php echo $trip['Location_start'] ?></td>
            <td><?php echo $trip['Location_end'] ?></td>
            <td><?php echo $trip['Customer_number'] ?></td>
            <td><?php echo $trip['Status'] ?></td>
            <td><a style="margin: 0 5px" class="btn btn-danger btn-sm" href="index.php?page=Trip-delete&id=<?php echo $trip['Trip_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete
                    <a style="margin: 0 5px" class="btn btn-warning btn-sm" href="index.php?page=Trip-update&id=<?php echo $trip['Trip_id'] ?>">Update</td>
            <!--            <td><a href="index.php?page=User-update&id=--><?php //echo $user['Usr_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>