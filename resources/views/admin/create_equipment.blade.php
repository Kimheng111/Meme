

<div class="min-height-300 bg-dark position-absolute w-100 ">
    @include('admin.header')
    <div class="container">
        @if($errors -> any())
        <ul>
            @foreach($errors -> all() as $error)
                <li class="text-light"><h6>{{$error}}</h6></li>
            @endforeach
        </ul>
        @endif
        <div class="row">
            <div class="col-sm-3 mb-3">
                <a class="btn btn-primary" href="../equipment"><< Back </a>
            </div>
        </div>
   <form action="{{route('store_equipment')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Equipment</label>
                <input type="text" name="name" class="form-control" placeholder="Equipment Name" required>
            </div>
            <div class="col-sm-2 mb-3">
                <label for="" id="label" class="text-light">Quantity</label>
                <input type="number" name="qty" class="form-control">
            </div>
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Phone</label>
                <input type="number" class="form-control" name="phone" id="">
            </div>
            <div class="col-sm-2 mb-3">
                <label for="" id="label" class="text-light">Price Fee</label>
                <input type="text" name="fee" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Is Active</label>
                <select class="form-select" name="is_active" id="">
                    <option value="True">True</option>
                    <option value="False">False</option>
                </select>
            </div>
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Image</label>
                <input type="file" name="image" id="image_input" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Description</label>
                <textarea class="form-control" name="description" id="" rows="4"></textarea>
            </div>  
        </div>
        <div class="row">
              <div class="col-sm-3 mb-3">
                <label for="" id="label" class="text-light">Image Desplay</label>
                <div class="col-sm-4 mb-3" id="imagePreview"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-success w-30">Save</button>
            </div>
        </div>
   </form>
</div>
</div>
@include('admin.footer')
