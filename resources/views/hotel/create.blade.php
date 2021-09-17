@extends('layouts.admin')

@section('content')
@section('title')
        Add Hotel
  @endsection

@if(session()->get('success'))
<script>
    Swal.fire({
  position: 'top-end',
  title: 'Hotal Added Succesful',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

    {{-- Form To Create A Company --}}

    <!-- component -->
    <div class="relative py-3 my-auto w-11/12 max-w-xl sm:mx-auto">
      <div class="relative p-8 bg-white shadow-sm sm:rounded-xl">
        <form action="{{ route('Hotel.store') }}" method="post" class="w-full">
            @csrf
            <h1 class=" w-full text-center uppercase font-bold text-2xl mb-4">Add Hotel Information</h1>
          <div class="mb-5 relative">
            <input type="text" id="Hotel" class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent @error('hotel_name')
            border-red-500 @enderror" name="hotel_name" placeholder="Hotel Name" autocomplete="off" />

            <div class=" ml-3 mt-2 text-sm text-red-600">
                @error('hotel_name')
                    <span>*{{ $message }}</span>
                @enderror
            </div>

            <label for="Hotel" class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Hotel Name</label>
          </div>
          
          <button type="submit" class="w-full bg-green-600 font-bold text-white p-3 rounded-md">ADD</button>
        </form>
      </div>
    </div>

@endsection