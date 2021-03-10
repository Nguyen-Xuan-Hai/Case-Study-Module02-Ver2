</form>
<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Taxi</h4>
        <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
            <input type="hidden"  name="Taxi_id" value="<?php echo $taxi[0]['Taxi_id'] ?>"/>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="License_plates" class="form-label">License_plates</label>
                    <input type="text" class="form-control" id="License_plates" value="<?php echo $taxi[0]['License_plates'] ?>" name="License_plates" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="Model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="Model" value="<?php echo $taxi[0]['Model'] ?>" name="Model" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Year" class="form-label">Year</label>
                    <input type="date" class="form-control" id="Year" value="<?php echo $taxi[0]['Year'] ?>" name="Year" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="Type" class="form-label">Type</label>
                    <select class="form-select" id="Type" value="<?php echo $taxi[0]['Type'] ?>" name="Type" required="">
                        <option><?php echo $taxi[0]['Type'] ?></option>
                        <option>4 Seat</option>
                        <option>7 Seat</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="Color" class="form-label">Color</label>
                    <select class="form-select" id="Color" value="<?php echo $taxi[0]['Color'] ?>" name="Color" required="">
                        <option><?php echo $taxi[0]['Color'] ?></option>
                        <option>White</option>
                        <option>Yellow</option>
                        <option>Green</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" id="Status" value="<?php echo $taxi[0]['Status'] ?>" name="Status" required="">
                        <option><?php echo $taxi[0]['Status'] ?></option>
                        <option>Active</option>
                        <option>Non-Active</option>
                    </select>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Driver_id" class="form-label">Driver</label>
                    <select class="form-select" id="Driver_id" name="Driver_id" required="">
                        <option value="<?php echo $taxi[0]['Driver_id'] ?>"><?php echo $taxi[0]['Driver_id'] ?></option>
                        <?php foreach ($getIds as $key => $getId): ?>
                            <option value="<?php echo $getId['Driver_id'] ?>"><?php echo $getId['F_name'] ?><?php echo $getId['L_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <label>Image</label>
                <input type="file" name="Image">

                <img src="Image/<?php echo $taxi[0]['Image'] ?>" style="width: 80px">
                <input type="hidden" name="old_img" value="<?php echo $taxi[0]['Image'] ?>">
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
        </form>
    </div>
</div>