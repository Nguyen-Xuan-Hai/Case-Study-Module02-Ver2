<table class="table table-striped table-hover">
    <tr>
        <button class="btn btn-secondary btn-lg"><a href="index.php?page=Driver-add">ADD</a></button>
        <th>STT</th>
        <th>F_name</th>
        <th>L_name</th>
        <th>Gender</th>
        <th>Conatct_no</th>
        <th>Rating</th>
        <th>Age</th>
        <th>Experience</th>
    </tr>


    <?php foreach ($drivers as $key => $driver): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $driver['F_name'] ?></td>
            <td><?php echo $driver['L_name'] ?></td>
            <td><?php echo $driver['Gender'] ?></td>
            <td><?php echo $driver['Conatct_no'] ?></td>
            <td><?php echo $driver['Rating'] ?></td>
            <td><?php echo $driver['Age'] ?></td>
            <td><?php echo $driver['Experience'] ?></td>
            <td><a href="index.php?page=Driver-delete&id=<?php echo $driver['Driver_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete|<a href="index.php?page=Driver-update&id=<?php echo $driver['Driver_id'] ?>">Update</td>
<!--            <td><a href="index.php?page=Driver-update&id=--><?php //echo $driver['Driver_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>