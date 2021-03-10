<table class="table table-striped table-hover">
    <tr>
        <button class="btn btn-secondary btn-lg"><a href="index.php?page=User-add">Add</a></button>
        <th>STT</th>
        <th>F_name</th>
        <th>L_name</th>
        <th>Gender</th>
        <th>Contat_no</th>
        <th>Age</th>
        <th>Address</th>
        <th>Taxi</th>
    </tr>


    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $user['F_name'] ?></td>
            <td><?php echo $user['L_name'] ?></td>
            <td><?php echo $user['Gender'] ?></td>
            <td><?php echo $user['Contat_no'] ?></td>
            <td><?php echo $user['Age'] ?></td>
            <td><?php echo $user['Address'] ?></td>
            <td><?php echo $user['Taxi_id'] ?></td>
            <td><a href="index.php?page=User-delete&id=<?php echo $user['Usr_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</td>
            <td><a href="index.php?page=User-update&id=<?php echo $user['Usr_id'] ?>">Update</td>
        </tr>
    <?php endforeach; ?>

</table>