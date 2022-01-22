
<x-layouts.base>
    {{-- If the user is authenticated --}}
    @auth()
        {{-- If the user is authenticated on the static sign up or the sign up page --}}
        @if (auth()->user()->role == 'admin')
            @include('layouts.navbars.auth.sidebar')
            {{-- @include('livewire.form_kpi') --}}
            @include('layouts.navbars.auth.nav')
            @include('components.plugins.fixed-plugin')
            @if (isset($slot))
                {{ $slot }} 
            @endif
            @yield('content')
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @else
            @include('layouts.navbars.auth.sidebar')
            {{-- @include('livewire.form_kpi') --}}
            @include('layouts.navbars.auth.nav')
            @include('components.plugins.fixed-plugin')
            @if (isset($slot))
                {{ $slot }} 
            @endif
            @yield('content')
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
            @include('layouts.navbars.guest.login')
            @if (isset($slot))
                {{ $slot }} 
            @endif
            @yield('content')
            <div class="mt-5">
                @include('layouts.footers.guest.with-socials')
            </div>
            {{-- If the user is on the sign up page --}}
        @elseif (!auth()->check() && in_array(request()->route()->getName(),['sign-up'],))
            <div>
                @include('layouts.navbars.guest.sign-up')
                @if (isset($slot))
                {{ $slot }} 
            @endif
                @yield('content')
                @include('layouts.footers.guest.with-socials')
            </div>
        @endif
    @endguest

    {{-- @livewireScripts --}}
    <!--JQuery -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ url('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('assets/plugins/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('assets/plugins/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('assets/plugins/custom.min.js') }}"></script>
    <!-- Sweet alert -->
    {{-- <script src="{{asset('assets/plugins/sweetalert/sweetalert2.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script> --}}
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2.min.js')}}"></script>
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    
    <!-- Magnific popup JavaScript -->
    <script src="{{url('assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
    @stack('scripts')

</x-layouts.base>
