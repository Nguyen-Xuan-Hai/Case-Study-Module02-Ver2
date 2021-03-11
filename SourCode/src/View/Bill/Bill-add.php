<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Bill</h4>
        <form class="needs-validation" novalidate="" method="post">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="Bill_date" class="form-label">Bill_date</label>
                    <input type="date" class="form-control" id="Bill_date" placeholder="" name="Bill_date" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="Amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="Amount" placeholder="Input a Number......" name="Amount" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Discount" class="form-label">Discount</label>
                    <input type="number" class="form-control" id="address" placeholder="Input a Number......" name="Discount" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Total" class="form-label">Total</label>
                    <input type="number" class="form-control" id="zip" placeholder="Input a Number......" name="Total" required="">
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Usr_id" class="form-label">Usr_id</label>
                    <select class="form-select" id="Usr_id" name="Usr_id" required="">
                        <?php foreach ($users as $key => $user): ?>
                            <option value="<?php echo $user['Usr_id'] ?>"><?php echo $user['Usr_id'] ?>.<?php echo $user['F_name'] ?><?php echo $user['L_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Trip_id" class="form-label">Trip_id</label>
                    <select class="form-select" id="Trip_id" name="Trip_id" required="">
                        <?php foreach ($trips as $key => $trip): ?>
                            <option value="<?php echo $trip['Trip_id'] ?>"><?php echo $trip['Trip_id'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
    </div>
</div>