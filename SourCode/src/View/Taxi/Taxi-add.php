<form method="POST">
    License_plates
    <input type="text"  name="License_plates" />
    <br />
    Model
    <input type="text"  name="Model" />
    <br />
    Year
    <input type="date"   name="Year" />
    <br />
    Type
    <select name="Type" >
        <option value="4 Seat">4 Seat</option>
        <option value="7 Seat">7 Seat</option>
    </select>
    <br />
    Color
    <select name="Color" >
        <option value="White">White</option>
        <option value="Yellow">Yellow</option>
        <option value="Green">Green</option>
    </select>
    <br />
    Status
    <select name="Status" >
        <option value="Active">Active</option>
        <option value="Non-Active">Non-Active</option>
    </select>
    <br />
    Driver
        <select name="Driver_id" >
            <?php foreach ($getIds as $key => $getId): ?>
            <option value="<?php echo $getId['Driver_id'] ?>"><?php echo $getId['F_name'] ?><?php echo $getId['L_name'] ?></option>
            <?php endforeach; ?>
        </select>
    <br />

    <label>Image</label>
    <input type="file" name="Image">
    <br />
    <input type="submit" value="Add product" />
</form>