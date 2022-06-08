@section('content')
    <div>
        @extends('layouts.app')
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> 
        
        <body>
            <div class="container-fluid pb-4">
                <div class="row">
                    <div class="col-12">
                        @if (session('message'))
                            <div class="alert alert-success alert-dismissible">
                                <strong>{{ session('message') }}</strong>
                            </div>	
                        @endif 
                        @if (session('error'))
                            <div class="alert alert-warning alert-dismissible">
                                <strong>{{ session('error') }}</strong>
                            </div>	
                        @endif

                        <form action="{{ url('content-management/update/'.$id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card mb-4" style="background: rgb(176, 255, 156)">                    
                                <div class="card-body">
                                    <h5>Edit - {{$content->name}}</h5><hr>

                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label>Name<span class="text-danger">*</span></label>
                                            <input type="name" name="name" value="{{ $content->name }}" class="form-control" placeholder="Insert Name of Content" required>
                                            @error('email') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label>Category<span class="text-danger">*</span></label>
                                            <input id="cat" type="text" name="category" value="{{ $content->category }}" class="form-control" placeholder="Insert Category" required>
                                            @error('category') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    
                                        <div class="col-md-6 mb-3">
                                            <label>Upload Image<span class="text-danger">*</span></label>
                                            <input type="file" name="img" class="form-control" placeholder="Upload Image">
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
            </div>

        </body>
        <script>
            $( function() {
              var lists =  @json($categories);
    
              $( "#cat" ).autocomplete({
                source: lists
              });
            } );
        </script>
    </div>
@endsection