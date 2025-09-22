<div class="modal fade" id="{{route('delete_equipment', ['equipment' => $equipment])}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="Modal">Waring</h1>
            </div>
            <form action="{{route('equipment.delete', ['equipment' => $equipment])}}" method="post">
            <div class="modal-body">
                <div class="modal-body bg text-dark">
                    <h4>Are you sure you want to detele?</h4>
                    <input type="hidden" value="{{$equipment -> id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>