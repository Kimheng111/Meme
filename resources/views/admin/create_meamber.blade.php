

<div class="min-height-300 bg-dark position-absolute w-100">
    @include('admin.header')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-3">
                <a class="btn btn-primary" href="meamber_list"><< Back </a>
            </div>
        </div>
   <form action="" method="post">
        <div class="row" >
            <div class="col-sm-4 mb-3">
                <label for="input_meamber_name" id="label" class="text-light"><b>Meamber Name</b></label>
                <input class=form-control type="text" name="meamber_name" placeholder="Meamber Name">
            </div>
            <div class="col-sm-2 mb-3">
                <label id="label" class="text-light"><b>Sex</b></label>
                <select name="sex" id="sex" class="form-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="I reader not to say">I reader not to say</option>
                </select>
            </div>
            <div class="col-sm-2 mb-3">
                <label for="date" id="label" class="text-light"><b>Date Of Birth</b></label>
                <input type="date" id="date_input" name="date" class="form-control">
            </div>
            <div class="col-sm-3 mb-3">
                <label for="phone" id="label" class="text-light"><b>Phone Number</b></label>
                <input type="number" name="number" id="number_input" class="form-control" placeholder="Phone Number">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <label for="meamber_type" id="label" class="text-light"><b>Meamber Type</b></label>
                <select name="meamber_type" id="meamber_type" class="form-select">
                    <option value="New_Meamber">New Meamber</option>
                    <option value="Returning_Meamber">Returning Meamber</option>
                    <option value="Corporate">Corporate</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light"><b>Emergency Number</b></label>
                <input type="number" name="emergency_number" id="emergency_number" class="form-control" placeholder="Emergency Number">
            </div>
            <div class="col-sm-2 mb-3">
                <label for="" id="label" class="text-light">MeamberShip detail</label>
                <select name="meamber_list" id="meamber_sl" class="form-select">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-sm-2 mb-3">
                <label for="exp_date" id="label" class="text-light">Expired Date</label>
                <input type="date" name="exp_date" id="date" class="form-control">
            </div>
            <div class="row">
                <div class="col-sm-2 mb-3">
                    <label for="" id="label" class="text-light">Job</label>
                    <input type="text" name="job" id="job" class="form-control" placeholder="Job">
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="email" id="label" class="text-light">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="col-sm-3 mb 3">
                    <label for="" id="label" class="text-light">Company</label>
                    <input type="text" name="company" id="company" class="form-control">
                </div>
                <div class="col-sm-2 mb-3">
                    <label for="" id="label" class="text-light">Meamber detail</label>
                    <select name="meamber_detail" id="meamber_detail" class="form-select">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="" id="label" class="text-light">Health Decleartion</label>
                    <input type="text" name="health_decleartion" id="" class="form-control" placeholder="Health Decleartion">
                </div>
            </div>
            <div class="row">
               <div class="col-sm-3 mb-3 ">
                    <label for="" id="label" class="text-light">Meamber Photo</label>
                    <input type="file" name="image" id="image_input" class="form-control">
                </div>
            </div>
            <div class="row">
                <label for="" id="label" class="text-light">Image Desplay</label>
                <div class="col-sm-4 mb-3" id="imagePreview"></div>
            </div>
            <div id="button_submit" class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" id="submit" onclick="alert('Are you sure')" class="btn btn-success w-10">Save</button>
            </div>
        </div>
   </form>
</div>
</div>
@include('admin.footer')
