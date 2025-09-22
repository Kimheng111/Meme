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
            <a class="btn btn-primary" href="equipment/create_equipment">Create Equipment</a>
        </div>
    </div>
    <div class="min-height-300 bg-light position-absolute w-95 ">
        <table class="table">
            <tr>
                <th>id</th>
                <th>Equipment</th>
                <th>QTY</th>
                <th>Phone</th>
                <th>Price fee</th>
                <th>Image</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($equipments as $equipment)
            <tr>
                <th>{{$equipment -> id}}</th>
                <td>{{$equipment -> name}}</td>
                <td>{{$equipment -> qty}}</td>
                <td>{{$equipment -> phone}}</td>
                <td>{{$equipment -> fee}}</td>
                <td>
                    <img class="image" src="{{asset($equipment -> image)}}" alt="">
                </td>
                <td>{{$equipment -> is_active}}</td>
                <td>
                    <!-- <a class="btn btn-primary" href="{{route('equipment.edit' , ['equipment' => $equipment])}}" data-bs-toggle="modal" data-bs-target="#EditModal">Edit</a> -->
                    <a class="btn btn-primary" href="{{route('equipment.edit' , ['equipment' => $equipment])}}" data-bs-toggle="modal" data-bs-target="#{{route('equipment.edit' , ['equipment' => $equipment])}}">Edit</a>
                    @include('admin.edit_equipment')
                </td>
                <td>
                    <button type="submit" class="btn btn-danger" name="delete" data-bs-toggle="modal" data-bs-target="#{{route('delete_equipment', ['equipment' => $equipment])}}">Delete</button>
                    @include('admin.delete_equipment')
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@include('admin.footer')