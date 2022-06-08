<section>
    <style>
        body, html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url('../assets/img/curved-images/black-red.jpg');

            /* Full height */
            width: 100%;
            opacity: 0.65
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<body>
    <div class="page-header section-height-75">
        <div class="bg">
            <div class="container">
            
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto mb-10">
                        <div class="card card-plain mt-10">
                            <div class="card-header pt-2 pb-0 text-left bg-dark">
                                <h3 class="fw-bolder text-white text-center">Welcome Back</h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                    <div class="mb-3">
                                        <label class="text-white">Email</label>
                                        <div class="@error('email')border border-danger rounded-3 @enderror">
                                            <input wire:model="email" id="email" type="email" class="form-control"
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        @error('email') <div class="text-white text-sm">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-white">Password</label>
                                        <div class="@error('password')border border-danger rounded-3 @enderror">
                                            <input wire:model="password" id="password" type="password" class="form-control"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        @error('password') <div class="text-white text-sm">{{ $message }}</div> @enderror
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-light w-100 mt-4 mb-0">{{ __('Sign in') }}</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('../assets/img/curved-images/red.jpg')"></div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
</body>
</section>
