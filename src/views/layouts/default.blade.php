@include('LandingPage.partials.meta')
@include('LandingPage.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('LandingPage.partials.footer')
