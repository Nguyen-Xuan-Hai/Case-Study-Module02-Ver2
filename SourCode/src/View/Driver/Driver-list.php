<table class="table table-striped table-hover" style="text-align: center">
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
        <th></th>
    </tr>


    <?php foreach ($drivers as $key => $driver): ?>
        <tr class="col-md-3 col">
            <td class="col-1"><?php echo ++$key ?></td>
            <td class="col-2"><?php echo $driver['F_name'] ?></td>
            <td class="col-2"><?php echo $driver['L_name'] ?></td>
            <td class="col-1"><?php echo $driver['Gender'] ?></td>
            <td class="col-1"><?php echo $driver['Conatct_no'] ?></td>
            <td class="col-1"><?php echo $driver['Rating'] ?></td>
            <td class="col-1"><?php echo $driver['Age'] ?></td>
            <td class="col-1"><?php echo $driver['Experience'] ?></td>
            <td class="col-2"><a style="margin: 0 5px" class="btn btn-danger btn-sm" href="index.php?page=Driver-delete&id=<?php echo $driver['Driver_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete
                    <a style="margin: 0 5px" class="btn btn-warning btn-sm" href="index.php?page=Driver-update&id=<?php echo $driver['Driver_id'] ?>">Update</td>
<!--            <td><a href="index.php?page=Driver-update&id=--><?php //echo $driver['Driver_id'] ?><!--">Update</td>-->
        </tr>
    <?php endforeach; ?>

</table>