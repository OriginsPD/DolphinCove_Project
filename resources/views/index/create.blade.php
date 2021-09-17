@extends('layouts.app')

@section('content')
     <!-- Container -->
     <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('/images/dolphin2.jpeg')"></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Registration</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" action="{{ route('register.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                               Full Name
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="name" type="text" placeholder="Enter Full Name" />
                                @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="email" type="text" placeholder="Enter Email" />
                                @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                        </div>
        
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="password" type="password" placeholder="Enter Password" />  
                                @error('password') <span class="text-sm text-red-600">{{ $message }}</span> @enderror                          
                        </div>                       
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit">
                                Register
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="{{ route('login') }}">
                                Already have an account?
                            </a>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection