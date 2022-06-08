<div>
    @livewire('user-managements.user-management-form-wire')    
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="text-center">Admins</h5>
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th col="1" class="text-center text-xs fw-bolder">NO</th>
                                            <th class="text-center text-xs fw-bolder">NAME</th>
                                            <th class="text-center text-xs fw-bolder">EMAIL</th>
                                            <th class="text-center text-xs fw-bolder">CREATION DATE</th>
                                            <th col="2" class="text-end text-sm fw-bolder"><i class="fa fa-ellipsis-v text-secondary"></i></th>
                                        </tr>
                                    </thead>

                                    @foreach ($admin as $key => $admins)
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-sm">{{ $key+1 }}</td>
                                                <td class="text-sm">{{ $admins->name }}</td>
                                                <td class="text-center text-sm">{{ $admins->email }}</td>
                                                <td class="text-center text-sm">{{ $admins->created_at }}</td>
                                                <td class="mx-auto text-end">
                                                    <button type="button" wire:click="selectItem({{$admins->id}} , 'update' )" class="btn btn-info btn-sm my-auto px-4" role="button">Edit</button>
                                                    <button type="button" wire:click="selectItem({{$admins->id}} , 'delete' )" class="btn btn-danger btn-sm px-3 my-auto data-delete" data-form="{{$admins->id}}">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
     
            <div class="col-12">
                <div class="container-fluid">

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="text-center">Employees</h5>
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th col="1" class="text-center text-xs fw-bolder">NO</th>
                                            <th class="text-center text-xs fw-bolder">NAME</th>
                                            <th class="text-center text-xs fw-bolder">EMAIL</th>
                                            <th class="text-center text-xs fw-bolder">CREATION DATE</th>
                                            <th col="2" class="text-end text-sm fw-bolder"><i class="fa fa-ellipsis-v text-secondary"></i></th>
                                        </tr>
                                    </thead>

                                    @foreach ($employee as $key => $employees)
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-sm">{{ $key+1 }}</td>
                                                <td class="text-sm">{{ $employees->name }}</td>
                                                <td class="text-center text-sm">{{ $employees->email }}</td>
                                                <td class="text-center text-sm">{{ $employees->created_at }}</td>
                                                <td class="mx-auto text-end">
                                                    <button type="button" wire:click="selectItem({{$employees->id}} , 'update' )" class="btn btn-info btn-sm my-auto px-4" role="button">Edit</button>
                                                    <button type="button" wire:click="selectItem({{$employees->id}} , 'delete' )" class="btn btn-danger btn-sm px-3 my-auto data-delete" data-form="{{$admins->id}}">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    @push('scripts')
        {{-- START SECTION - SCRIPT FOR DELETE BUTTON  --}}
        <script>
            document.addEventListener('livewire:load', function () {
                $(document).on("click", ".data-delete", function (e) 
                    {
                        e.preventDefault();
                        swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            e.preventDefault();
                            Livewire.emit('delete')
                        } 
                        });
                    });
            })
        </script>
        {{-- END SECTION - SCRIPT FOR DELETE BUTTON  --}}
    @endpush

</div>