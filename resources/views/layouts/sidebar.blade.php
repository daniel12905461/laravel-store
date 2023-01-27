<aside class="fixed z-10 h-screen">
  <div
    class="fixed inset-0 z-20 bg-black opacity-25 transition-opacity duration-300 lg:hidden block"
  ></div>
  <div class="fixed z-30 h-screen flex-col bg-slate-50 shadow-xl lg:flex lg:w-80 flex w-80">
    <div class="flex items-center justify-center pt-10 pb-8 text-center">
      {{-- <Image
        height='40px'
        width='165px'
        src={logoCaranavi}
        alt='Logotipo Caranavi'
      /> --}}
      <h2 class="text-2xl font-extrabold text-primary-500">
        Blog
      </h2>
    </div>
    <div class='scrollbarStyle flex-grow overflow-y-auto px-3'>
      <div class="flex flex-col rounded-lg  py-4 px-6">
        <a
          class="block py-1 text-lg font-semibold text-dark-500 transition ease-in  hover:scale-110 hover:text-primary-500 hover:duration-150 rounded-md border border-primary-500 pl-2"
          href="/introduccion-a-los-microcontroladores-y-su-programacion"  
        >
          <span class="flex items-center text-primary-500">
            {{-- <Icon className='h-5 w-5' aria-hidden='true' icon={route.icon || ''} /> --}}
            <span class='ml-1 text-base'>Introducción a los microcontroladores y su...</span>
          </span>
        </a>
        <a
          class="block py-1 text-lg font-semibold text-dark-500 transition ease-in  hover:scale-110 hover:text-primary-500 hover:duration-150 rounded-md border border-primary-500 pl-2"
          href="/control-de-motores-con-microcontroladores"  
        >
          <span class="flex items-center text-primary-500">
            {{-- <Icon className='h-5 w-5' aria-hidden='true' icon={route.icon || ''} /> --}}
            <span class='ml-1 text-base'>Control de motores con Microcontroladores</span>
          </span>
        </a>
      </div>
    </div>
    <div class='flex items-center justify-center text-center'>
        <button class='btn-dark-outline my-4 font-semibold' onClick={cerrarSession}>Cerrar Sesión</button>
    </div>
  </div>
</aside>