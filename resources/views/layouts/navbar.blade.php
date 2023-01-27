<nav class='fixed flex h-20 w-full flex-row bg-white p-3 shadow-sm md:static md:shadow-none'>
  <div class='lg:hidden'>
    <button
      id='boton'
      class='items-center rounded px-2 py-2 text-gray-400 transition hover:bg-gray-50 hover:text-gray-500'
    >
      Menu
      {{-- <SvgMenu className='h-5 w-5' aria-hidden='true' /> --}}
    </button>
  </div>
  <div class='flex-grow text-center'>
    <div class='md:hidden'>
      <span class='ml-1 mt-2 text-lg font-bold text-gray-700'>Caranavi</span>
      {{-- <Image
        height='40px'
        width='165px'
        src={logoCaranavi}
        alt='Logotipo Caranavi'
      /> --}}
    </div>
  </div>
  <div class='flex flex-col  items-center'>
    <img
      class='inline-block h-8 w-8 rounded-full ring-2 ring-white'
      src='https://cdn.devdojo.com/images/june2021/headshot2.jpg'
      alt='{user.handle}'
    />
    <span>Admin</span>
  </div>
</nav>