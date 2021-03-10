<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Taxi</h4>
        <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="License_plates" class="form-label">License_plates</label>
                    <input type="text" class="form-control" id="License_plates" placeholder="" name="License_plates" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="Model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="Model" placeholder="" name="Model" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Year" class="form-label">Year</label>
                    <input type="date" class="form-control" id="Year"  name="Year" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="Type" class="form-label">Type</label>
                    <select class="form-select" id="Type" name="Type" required="">
                        <option>4 Seat</option>
                        <option>7 Seat</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="Color" class="form-label">Color</label>
                    <select class="form-select" id="Color" name="Color" required="">
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
                    <select class="form-select" id="Status" name="Status" required="">
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
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
    </div>
</div>