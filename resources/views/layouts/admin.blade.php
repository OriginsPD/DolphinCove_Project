<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel | @yield('title')</title>
  <link rel="icon" href="/images/dcove.png">
  <link rel="stylesheet" href="/css/app.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
    {{-- Main Hub For Welcome Page --}}
<body class=" h-screen bg-gray-200" style="background-image: url('/images/dcove-cover.jpg'); background-size: cover; background-repeat: no-repeat;">
    {{-- <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full border-b-2 border-gray-200">
        <div class="mb-2 sm:mb-0">
          <a href="{{ route('Admin.index') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Admin Panel</a>
        </div>
        <div>
          <a href="{{ route('Hotel.create') }}" class="text-lg uppercase no-underline text-grey-darkest hover:text-blue-dark ml-2">
            <button class="px-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring transition text-gray-600 border-gray-600 hover:text-white hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300 uppercase" type="submit">Hotel</button></a>

          <a href="{{ route('Company.create') }}" class="text-lg uppercase no-underline text-grey-darkest hover:text-blue-dark ml-2"><button class="px-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring transition text-gray-600 border-gray-600 hover:text-white hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300 uppercase" type="submit">Company</button></a>

          <a href="{{ route('Program.create') }}" class="text-lg uppercase no-underline text-grey-darkest hover:text-blue-dark ml-2"><button class="px-4 py-2 rounded-md text-sm font-medium border focus:outline-none focus:ring transition text-gray-600 border-gray-600 hover:text-white hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300 uppercase" type="submit">Program</button></a>
        </div>
      </nav> --}}

      {{-- <!-- component -->
<div class="min-h-screen border  flex flex-row bg-gray-100">
  <div class="flex border border-blue-500 flex-col w-56 bg-white  overflow-hidden">
    <div class="flex items-center justify-center h-20 shadow-md">
      <h1 class="text-3xl uppercase text-indigo-500">Admin Panel</h1>
    </div>
    <ul class="flex flex-col py-4">
      <li>
        <a href="{{ route('Admin.index') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
          <span class="text-sm font-medium">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('Hotel.create') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-music"></i></span>
          <span class="text-sm font-medium">Add Hotel</span>
        </a>
      </li>
      <li>
        <a href="{{ route('Company.create') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-drink"></i></span>
          <span class="text-sm font-medium">Add Company</span>
        </a>
      </li>
      <li>
        <a href="{{ route('Program.create') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-shopping-bag"></i></span>
          <span class="text-sm font-medium">Add Program</span>
        </a>
      </li>
      
      <li>
        <a href="#" class="flex flex-row mt-10 items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
          <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
          <span class="text-sm font-medium">Logout</span>
        </a>
      </li>
    </ul>
  </div>
      @yield('content')
</div> --}}

<!-- component -->
<div class="w-full text-gray-700 bg-white mb-20 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2 shadow-lg">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="p-4 flex flex-row items-center justify-between">
      <div class=" -ml-12 mr-4 h-16 w-18">
        <img src="/images/dcove.png" class="h-full" alt="">
      </div>
      <div>
        <a href="{{ route('Admin.index') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Admin Panel</a><br>
        <span class="text-xs text-grey-dark">ADMIN | {{ session()->get('user') }}</span>
      </div>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Booking.create') }}"><i class="fad fa-bookmark pr-3"></i>Book Guest</a>
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span><i class="fal fa-plus-square pr-3"></i>Create & Add</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right mr-28 rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Guest.create') }}"> <i class="fas fa-users pr-3"></i> Guest</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Hotel.create') }}"> <i class="far fa-hotel pr-3"></i> Hotel</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Company.create') }}"> <i class="fal fa-bus pr-3"></i> Tour Company</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Program.create') }}"> <i class="far fa-swimmer pr-3"></i> Program</a>
          </div>
        </div>
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('logout.exits') }}"><i class="far fa-sign-out-alt pr-3"></i>Logout</a>  
      </div>    
    </nav>
  </div>
</div>
  @yield('content')
</body>

</html>