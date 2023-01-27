<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite('resources/css/app.css')
</head>

<body>
  @extends('layouts.app')
  @section('content')
  
  <section class='px-3 md:px-20' id=''>
    <div class='grid grid-cols-1 md:grid-cols-2 '>
      <div class='container'>
        <header class="pt-5">
          {{-- <h1 class="text-4xl font-bold my-6">Alcachofera</h1> --}}
          <h1 class="text-4xl font-bold my-6">Tienda Online de Plantas Medicinales</h1>
        </header>
        <p class="text-base mb-2">
          Durante el siglo XVI, fue considerada como una planta afrodisíaca, aunque no como una planta medicinal.
          Es cuando a mediados del siglo XX, que ha sido considerada como un remedio para enfermedades hepáticas
          y biliares.
        </p>
        <h2 class="text-3xl font-semibold my-4">Propiedades e indicaciones</h2>
        <p class="text-base mb-2">
          En las hojas de la <b>Alcachofera</b> es donde se encuentra en mayor cantidad sus propiedades. Tales como ser la cinarina y unos derivados de la luteína. También es muy rica en inulina que es un hidrato de carbono muy tolerado por los diabéticos.
        </p>
        <p class="text-base mb-2">
          Si bien la cabezuela floral, también contiene los efectos medicinales que describimos, para conseguir un mejor resultado se debe usar las hojas.
        </p>
        <h2 class="text-3xl font-semibold my-4">Preparación y empleo</h2>
        <ul class="list-disc">
          <li>
            <b>Infusión: </b>
            Hervir en agua las hojas y/o el tallo, y se debe beber durante el día máximo 3 tazas.
          </li>
        </ul>
      </div>
      <img src="../images/alcachofa.jpg" alt="Alcachoferas" class="w-auto max-h-[40rem] m-auto" />
    </div>
  </section>
  
  @endsection
</body>

</html>