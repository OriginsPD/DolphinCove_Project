@extends('layouts.admin')

@section('content')
@section('title')
        Add Program
  @endsection
{{-- Form To Create A Program --}}

@if(session()->get('success'))
<script>
    Swal.fire({
  position: 'top-end',
  title: 'Program Added Succesful',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

<div class="relative py-3 w-11/12 my-auto max-w-xl sm:mx-auto">
    <div class="relative p-8 bg-white shadow-sm sm:rounded-xl">
        <h1 class=" w-full text-center uppercase font-bold text-2xl mb-5">Add Program Information</h1>
        <form action="{{ route('Program.store') }}" method="POST" class="w-full">
            @csrf
            <div class="mb-5 relative">
                <input type="program" id="program"
                    class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent @error('program_name') border-red-400 @enderror"
                    name="program_name" autocomplete="off" />

                <div class=" ml-3 mt-2 text-sm text-red-600">
                    @error('program_name')
                    <span>*{{ $message }}</span>
                    @enderror
                </div>

                <label for="program"
                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Program
                    Name</label>

            </div>
            <div class="mb-5 relative">
                <input type="number" id="Cost"
                    class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent @error('cost') border-red-400 @enderror"
                    min="0" name="cost" autocomplete="off" />

                <div class=" ml-3 mt-2 text-sm text-red-600">
                    @error('cost')
                    <span>*{{ $message }}</span>
                    @enderror
                </div>

                <label for="Cost"
                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Program
                    Cost:</label>

            </div>

            <div class="mb-5 relative">
                <input type="date" id="Excursion" 
                    class="peer pt-8 border border-gray-200 focus:outline-none text-center rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent @error('excursion_date') border-red-400 @enderror"
                    name="excursion_date" autocomplete="off" />

                <div class=" ml-3 mt-2 text-sm text-red-600">
                    @error('excursion_date')
                    <span>*{{ $message }}</span>
                    @enderror
                </div>

                <label for="Excursion"
                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Date
                    of Excursion:</label>

            </div>

            <div class="flex mt-6 ml-4 my-4">
                <button type="button" onclick="">
                <label class="flex items-center">
                  <input type="checkbox"  value="Open Everyday" id="check" onclick="disableDate()" class="form-checkbox bg-gray-500">
                  <span class="ml-2">Excursion Date: Everyday
                </label>
            </button>
              </div>

            <button type="submit" class="w-full bg-green-600 uppercase font-bold text-white p-3 rounded-md">Add
                Program</button>
        </form>
    </div>
</div>

<script>
    let check = document.getElementById('check');
    let date = document.getElementById('Excursion');

    // check.checked = true


    // console.log(check.checked)

    check.addEventListener("change",function(){

        if(check.checked === true){
        document.getElementById('Excursion').disabled = true;
        check.setAttribute('name','excursion_date');
    }else{
        document.getElementById('Excursion').disabled = false;
    }

    });
    


    // function disableDate() {
    //     document.getElementById('Excursion').disabled = true;
    // }
    
    
</script>

@endsection