<table class="table table-striped table-hover" style="text-align: center">
    <div style="display: flex">
        <div><button class="btn btn-secondary btn-lg" ><a href="index.php?page=User-add">ADD</a></button></div>
        <div style="margin-left: 920px"><button class="btn btn-secondary btn-lg" ><a href="index.php?page=Trip-add">CreatTrip</a></button></div>

    </div>
    <tr>
        <th>STT</th>
        <th>F_name</th>
        <th>L_name</th>
        <th>Gender</th>
        <th>Contat_no</th>
        <th>Age</th>
        <th>Address</th>
        <th>Taxi</th>
        <th></th>
    </tr>


    <?php foreach ($users as $key => $user): ?>
        <tr class="col-md-3 col">
            <td class="col-1"><?php echo ++$key ?></td>
            <td class="col-2"><?php echo $user['F_name'] ?></td>
            <td class="col-2"><?php echo $user['L_name'] ?></td>
            <td class="col-1"><?php echo $user['Gender'] ?></td>
            <td class="col-1"><?php echo $user['Contat_no'] ?></td>
            <td class="col-1"><?php echo $user['Age'] ?></td>
            <td class="col-1"><?php echo $user['Address'] ?></td>
            <td class="col-1"><?php echo $user['Taxi_id'] ?></td>
            <td class="col-2"><a style="margin: 0 5px" class="btn btn-danger btn-sm" href="index.php?page=User-delete&id=<?php echo $user['Usr_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete
                    <a style="margin: 0 5px" class="btn btn-warning btn-sm" href="index.php?page=User-update&id=<?php echo $user['Usr_id'] ?>">Update</td>
<!--            <td><a href="index.php?page=User-update&id=--><?php //echo $user['Usr_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>
