<table class="table table-striped table-hover" style="text-align: center">
    <tr>
        <th>STT</th>
        <th>Bill_date</th>
        <th>Amount</th>
        <th>Discount</th>
        <th>Total</th>
        <th>Usr_id</th>
        <th>Trip_id</th>
    </tr>
    <?php foreach ($bills as $key => $bill): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $bill['Bill_date'] ?></td>
            <td><?php echo $bill['Amount'] ?></td>
            <td><?php echo $bill['Discount'] ?></td>
            <td><?php echo $bill['Total'] ?></td>
            <td><?php echo $bill['Usr_id'] ?></td>
            <td><?php echo $bill['Trip_id'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>