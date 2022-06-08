<div>
    {{-- START SECTION - USER FORM  --}}
    <div class="row"> 
        <div class="col-md-12">
            <div class="container-fluid">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                        <strong>{{ session('message') }}</strong>
                    </div>	
                @endif

                <form wire:submit.prevent="store">
                    <div class="card mb-4" style="background: rgb(176, 255, 156)">                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label class="control-label">Name<span class="text-danger">*</span></label>
                                    <input wire:model="name" type="text" id="name" name="name" class="form-control" autofocus required>
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="col-md-4 mb-2">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input wire:model="email" type="email" id="email" name="email" class="form-control" required>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="col-md-4 mb-3">
                                    <label class="control-label">Password<span class="text-danger">*</span></label>
                                    <input wire:model="password" type="password" id="password" name="password" class="form-control" placeholder="">
                                    @error('password') <span class="error">{{ $message }}</span> @enderror
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
    {{-- END SECTION - USER FORM  --}}
</div>