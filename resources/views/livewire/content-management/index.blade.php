<div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">  
    <div class="row"> 
        <div class="col-md-12">
            <div class="container-fluid">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show py-2 mb-2" role="alert">
                        <strong>{{ session('message') }}</strong>
                    </div>	
                @endif

                <form action="{{ url('/content-management/create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-4" style="background: rgb(176, 255, 156)">                    
                        <div class="card-body">
                            <h5>Create Content</h5><hr>

                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label>Name<span class="text-danger">*</span></label>
                                    <input type="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Insert Name of Content" required>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label>Category<span class="text-danger">*</span></label>
                                    <input id="cat" type="text" name="category" value="{{ old('category') }}" class="form-control" placeholder="Insert Category" required>
                                    @error('category') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label>Upload Image<span class="text-danger">*</span></label>
                                    <input type="file" name="img" class="form-control" value="{{ old('img') }}" placeholder="Upload Image" required>
                                    @error('img') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            
                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-dark px-4 my-auto" href="javascript:;"><i class="fas fa-plus"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-12">
                <div class="container-fluid">
                    
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5>List Content</h5><hr>
                            <div class="table-responsive">
                                <table class="table align-items-center table-hover">
                                    <thead>

                                <tr class="text-xxs opacity-8 text-center fw-bolder">
                                  <th class="col-1"></th>
                                  <th>NAME</th>
                                  <th>CATEGORY</th>
                                  <th class="col-1">ICON</th>
                                  <th class="col-3"></th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach ($content as $key=>$c)
                                    <tr>
                                        <td class="text-sm text-center">{{ $key+1 }}</td>
                                        <td class="text-sm fw-bold">{{ $c->name }}</td>
                                        <td class="text-sm fw-bold text-center">{{ $c->category }}</td>
                                        <td class="text-center"><img src="{{ $c->img }}" style="max-width:50px"></td>
                                        <td class="text-sm fw-bold text-end">
                                            <a href="{{ url('content-management/edit/'.$c->id) }}" class="btn btn-info btn-sm px-4 my-auto">Edit</a>
                                            <button type="button" wire:click="selectItem({{$c->id}} , 'delete' )" class="btn btn-danger btn-sm px-3 my-auto data-delete" data-form="{{$c->id}}">Delete</button>
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

    <script>
        $( function() {
          var lists =  @json($categories);

          $( "#cat" ).autocomplete({
            source: lists
          });
        } );
    </script>
</div>