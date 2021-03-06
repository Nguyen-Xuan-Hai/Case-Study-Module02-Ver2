<div class="row g-3">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Driver address</h4>
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
                    <label for="Conatct_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="address" placeholder="Input a Number......" name="Conatct_no" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="Rating" class="form-label">Rating</label>
                    <select class="form-select" id="country" name="Rating" required="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
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
                <div class="col-12">
                    <label for="Experience" class="form-label">Experience</label>
                    <input type="text" class="form-control" id="address" placeholder="" name="Experience" required="">
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