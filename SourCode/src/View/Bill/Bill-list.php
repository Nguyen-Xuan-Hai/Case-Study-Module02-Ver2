<table class="table table-striped table-hover" style="text-align: center">
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
            <td class="col-2"><?php echo $user['Contat_no'] ?></td>
            <td class="col-2"><?php echo $user['Age'] ?></td>
            <td class="col-1"><?php echo $user['Address'] ?></td>
            <td class="col-1"><?php echo $user['Taxi_id'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>


