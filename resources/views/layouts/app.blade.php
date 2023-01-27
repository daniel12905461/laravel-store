
@include('layouts.sidebar')

<div class='scroll-content-style flex  h-screen w-full flex-col lg:pl-80'>

  @include('layouts.navbar')

  <div class='flex-grow'>
    <div class='container mx-auto mt-[5rem] px-5 pb-5 pt-2  md:mt-0 md:pt-0'>
    
      @yield('content')

    </div>
  </div>
  
  {{-- @include('layouts.footer') --}}

</div>