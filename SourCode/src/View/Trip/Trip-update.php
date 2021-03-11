<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Trip</h4>
        <form class="needs-validation" novalidate="" method="post">
            <input type="hidden"  name="Trip_id" value="<?php echo $trip[0]['Trip_id'] ?>"/>

            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="Trip_date" class="form-label">Trip_date</label>
                    <input type="date" class="form-control" id="Trip_date" value="<?php echo $trip[0]['Trip_date'] ?>" name="Trip_date" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="Description" value="<?php echo $trip[0]['Description'] ?>" name="Description" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Driver_id" class="form-label">Driver</label>
                    <select class="form-select" id="state" name="Driver_id" required="">
                        <option value="<?php echo $trip[0]['Driver_id'] ?>"><?php echo $trip[0]['Driver_id'] ?></option>
                        <?php foreach ($getIds as $key => $getId): ?>
                            <option value="<?php echo $getId['Driver_id'] ?>"><?php echo $getId['Driver_id'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Usr_id" class="form-label">User</label>
                    <select class="form-select" id="state" name="Usr_id" required="">
                        <option value="<?php echo $trip[0]['Usr_id'] ?>"><?php echo $trip[0]['Usr_id'] ?></option>
                        <?php foreach ($getIds as $key => $getId): ?>
                            <option value="<?php echo $getId['Usr_id'] ?>"><?php echo $getId['Usr_id'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Taxi_id" class="form-label">Taxi</label>
                    <select class="form-select" id="Taxi_id" name="Taxi_id" required="">
                        <option value="<?php echo $trip[0]['Taxi_id'] ?>"><?php echo $trip[0]['Taxi_id'] ?></option>
                        <?php foreach ($getIds as $key => $getId): ?>
                            <option value="<?php echo $getId['Taxi_id'] ?>"><?php echo $getId['Taxi_id'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Strt_time" class="form-label">Strt_time</label>
                    <input type="text" class="form-control" id="Strt_time" value="<?php echo $trip[0]['Strt_time'] ?>" name="Strt_time" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-12">
                    <label for="End_time" class="form-label">End_time</label>
                    <input type="text" class="form-control" id="End_time" value="<?php echo $trip[0]['End_time'] ?>" name="End_time" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Location_start" class="form-label">Location_start</label>
                    <input type="text" class="form-control" id="Location_start" value="<?php echo $trip[0]['Location_start'] ?>" name="Location_start" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Location_end" class="form-label">Location_end</label>
                    <input type="text" class="form-control" id="Location_end" value="<?php echo $trip[0]['Location_end'] ?>" name="Location_end" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Customer_number" class="form-label">Customer_number</label>
                    <input type="number" class="form-control" id="Customer_number" value="<?php echo $trip[0]['Customer_number'] ?>" name="Customer_number" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" id="Status" name="Status" required="">
                        <option value="<?php echo $trip[0]['Status'] ?>"><?php echo $trip[0]['Status'] ?></option>
                        <option>In Process</option>
                        <option>Resolved</option>
                        <option>Cancelled</option>
                    </select>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
    </div>
</div>