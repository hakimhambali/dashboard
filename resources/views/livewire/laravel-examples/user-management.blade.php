<div>
    @livewire('laravel-examples.user-management-form-wire')
    <div>

        {{-- <div class="alert alert-secondary mx-4" role="alert">
            <span class="text-white"><strong>Add, Edit, Delete features are not functional!</strong> This is a
                <strong>PRO</strong> feature!
                Click <strong><a href="https://momentuminternet.com/" target="_blank"
                        class="text-white">here</a></strong>
                to see the PRO
                product!</span>
        </div> --}}
    
        <div class="row">

            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="p-0">
                            <div class="col-12">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">
                                            ID
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-5">
                                            Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-3">
                                            Email
                                        </th>
                                        {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            role
                                        </th> --}}
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2">
                                            Creation Date
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">
                                            
                                        </th>
                                        {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th> --}}
                                    </tr>
                                </thead>
                                @foreach ($admin as $key => $admins)
                                <tbody>
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{$key+1}}</p>
                                        </td>
                                        <td>
                                         <p class="text-xs font-weight-bold mb-0" value="{{$admins->id}}">{{$admins->name}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$admins->id}}">{{$admins->email}}</p>
                                        </td>
                                        {{-- <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$admins->id}}">{{$admins->role}}</p>
                                        </td> --}}
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$admins->id}}">{{$admins->created_at}}</p>
                                        </td>
                                        {{-- <td class="text-center">
                                            <table style="border:none">
                                                <tr>
                                                    <td style="border:none">
                                                        <button type="button" wire:click="selectItem({{$admins->id}} , 'update' )" class="btn btn-sm waves-effect waves-light btn-dark" style="font-size: 10px"><i class="fa fa-edit"></i> Edit User</button>
                                                    </td>
                                                    <td style="border:none">
                                                        <button type="button" wire:click="selectItem({{$admins->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" style="font-size: 10px" data-form="{{$admins->id}}"><i class="fas fa-trash-alt"></i> Delete</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td> --}}
                                        <td class="text-center">
                                            <table style="border:none">
                                                <tr>
                                                    <td style="border:none">    
                                                        <div class="col-lg-6 col-5 my-auto text-middle">
                                                            <div class="dropdown float-lg-start pe-4">
                                                              <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-secondary"></i>
                                                              </a>   
                                                                <ul class="dropdown-menu px-2 py-3 ms-n4 ms-n5" aria-labelledby="dropdownTable">
                                                                    <li><button type="button" wire:click="selectItem({{$admins->id}} , 'update' )" class="dropdown-item border-radius-md" role="button">Edit</button></li>
                                                                    <li><button type="button" wire:click="selectItem({{$admins->id}} , 'delete' )" class="dropdown-item border-radius-md data-delete" style="color: red;" data-form="{{$admins->id}}">Delete</button></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
     
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Employee</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="p-0">
                            <div class="col-12">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">
                                            ID
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-5">
                                            Name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-3">
                                            Email
                                        </th>
                                        {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            role
                                        </th> --}}
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2">
                                            Creation Date
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">
                                            
                                        </th>
                                        {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th> --}}
                                    </tr>
                                </thead>
                                @foreach ($employee as $key => $employees)
                                <tbody>
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{$key+1}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" value="{{$employees->id}}">{{$employees->name}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$employees->id}}">{{$employees->email}}</p>
                                        </td>
                                        {{-- <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$employees->id}}">{{$employees->role}}</p>
                                        </td> --}}
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0" value="{{$employees->id}}">{{$employees->created_at}}</p>
                                        </td>
                                        {{-- <td class="text-center">
                                            <table style="border:none">
                                                <tr>
                                                    <td style="border:none">
                                                        <button type="button" wire:click="selectItem({{$employees->id}} , 'update' )" class="btn btn-sm waves-effect waves-light btn-dark" style="font-size: 10px"><i class="fa fa-edit"></i> Edit User</button>
                                                    </td>
                                                    <td style="border:none">
                                                        <button type="button" wire:click="selectItem({{$employees->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" style="font-size: 10px" data-form="{{$employees->id}}"><i class="fas fa-trash-alt"></i> Delete</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td> --}}
                                        <td class="text-center">
                                            <table style="border:none">
                                                <tr>
                                                    <td style="border:none">    
                                                        <div class="col-lg-6 col-5 my-auto text-middle">
                                                            <div class="dropdown float-lg-start pe-4">
                                                              <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-secondary"></i>
                                                              </a>   
                                                                <ul class="dropdown-menu px-2 py-3 ms-n4 ms-n5" aria-labelledby="dropdownTable">
                                                                    <li><button type="button" wire:click="selectItem({{$employees->id}} , 'update' )" class="dropdown-item border-radius-md" role="button">Edit</button></li>
                                                                    <li><button type="button" wire:click="selectItem({{$employees->id}} , 'delete' )" class="dropdown-item border-radius-md data-delete" style="color: red;" data-form="{{$employees->id}}">Delete</button></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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