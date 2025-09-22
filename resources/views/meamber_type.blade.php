@include('admin.header')
<div class="container">
    @if($errors -> any())
        <ul>
            @foreach($errors -> all() as $error)
                <li class="text-light"><h6>{{$error}}</h6></li>
            @endforeach
        </ul>
    @endif

    @if(session('success') || isset($success))
        <ul>
            <li><h6 class="text-light">{{ session('message') ?? $message ?? "success"}}</h6></li>
        </ul>
    @endif
    <div class="row">
        <div class="col-sm-6">
            <label for="" id="label" class="text-light">Create Meamber Type</label>
        </div>
    </div>
    <form action="{{route('store')}}" method="post">
        @csrf
        @method('post')
        <div class="row">
        <div class="col-sm-3 mb-3">
            <label id="label" class="text-light">Meamber Type</label>
            <input type="text" name="name" id="" class="form-control" required>
        </div>
        <div class="col-sm-3 mb-3">
            <label id="label" class="text-light">Price</label>
            <input type="text" name="price" id="" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 mb-3">
            <button type="submit" class="btn btn-success w-25" id="btn_submit">Save</button>
        </div>
    </div>
    </form>
</div>

@include('admin.footer')