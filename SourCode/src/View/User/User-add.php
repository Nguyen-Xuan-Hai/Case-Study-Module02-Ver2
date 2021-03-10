<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">User address</h4>
        <form class="needs-validation" novalidate="" method="post">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="F_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" name="F_name" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="L_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" name="L_name" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Contat_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="address" placeholder="Input a Number......" name="Contat_no" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Gender" class="form-label">Gender</label>
                    <select class="form-select" id="state" name="Gender" required="">
                        <option>Male</option>
                        <option>FeMale</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="Age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="zip" placeholder="" name="Age" required="">
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="Taxi_id" class="form-label">Taxi</label>
                    <select class="form-select" id="state" name="Taxi_id" required="">
                        <?php foreach ($ids as $key => $id): ?>
                            <option value="<?php echo $id['Taxi_id'] ?>"><?php echo $id['Taxi_id'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="" name="Address" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
    </div>
</div>