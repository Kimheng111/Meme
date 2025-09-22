
<div class="modal fade" id="{{route('equipment.edit' , ['equipment' => $equipment])}}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="Modal">Edit</h1>
            </div>
            <form action="{{route('equipment.update', ['equipment' => $equipment])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" value="{{$equipment -> id}}" >
                <div class="modal-body bg-dark">
                    <div class="row">
                        <div class="col-sm-3 mb-3">
                            <label for="" id="label" class="text-light">Equipment</label>
                            <input type="text" name="name" class="form-control" placeholder="Equipment Name" value="{{$equipment -> name}}" required>
                        </div>
                        <div class="col-sm-2 mb-3">
                            <label for="" id="label" class="text-light">Quantity</label>
                            <input type="number" name="qty" class="form-control" value="{{$equipment -> qty}}">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="" id="label" class="text-light">Phone</label>
                            <input type="number" class="form-control" name="phone" id="" value="{{$equipment -> phone}}">
                        </div>
                        <div class="col-sm-2 mb-3">
                            <label for="" id="label" class="text-light">Price Fee</label>
                            <input type="text" name="fee" id="" class="form-control" value="{{$equipment -> fee}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb-3">
                            <label for="" id="label" class="text-light">Is Active</label>
                            <select class="form-select" name="is_active" id="" value="{{$equipment -> is_active}}">
                                <option value="True">True</option>
                                <option value="False">False</option>
                            </select>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <label for="" id="label" class="text-light">Image</label>
                            <input type="file" name="image" id="image_input" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mb-3">
                            <label for="" id="label" class="text-light">Description</label>
                            <textarea class="form-control" name="description" id="" rows="4" value="{{$equipment -> description}}"></textarea>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="" id="label" class="text-light">Image Desplay</label>
                            <div class="col-sm-4 mb-3" id="imagePreview">
                                @if(isset($equipment -> image))
                                <img class="image" src="{{asset($equipment -> image)}}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
    </div>
</div>
 <script src="{{asset('../assets/js/showimage.js')}}"></script> 