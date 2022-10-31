<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.includes.header')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.includes.navbar')
            @include('layouts.includes.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            @include('layouts.includes.footer')
        </div>
    </div>
    @stack('script')
</body>

</html>
