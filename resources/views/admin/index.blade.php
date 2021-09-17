@extends('layouts.admin')

@section('content')
@section('title')
        Home
  @endsection

@if(session()->has('login'))
<script>
    const Toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  showConfirmButton: false,
  timer: 2500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
</script>
@endif
  <!-- component -->
<div class="container mx-auto">
	<table class="text-left w-full shadow-xl border-2">
		<thead class="bg-gray-500 text-center rounded-t-xl flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Name</th>
				<th class="p-4 w-1/4">Guest Type</th>
        <th class="p-4 w-1/4">Payment Method</th>
        <th class="p-4 w-1/4">Hotel</th>
        <th class="p-4 w-1/4">Company</th>
        <th class="p-4 w-1/4">Action</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-gray-200 flex flex-col items-center justify-between overflow-y-scroll w-full text-center" style="height: 50vh;">
      @foreach ($guest as $value )
      {{-- {{ dd($value) }} --}}
          
			<tr class="flex w-full mb-4">
				<td class="p-4 w-1/4">{{ $value->name }}</td>
				<td class="p-4 w-1/4">
          @if($value->hotel_name === "None")
            Walk-In
          @else
            {{ $value->g_type }}
          @endif
           Guest
          </td>
				<td class="p-4 w-1/4">
          @if($value->hotel_name === "None")
            Cash
          @else
            {{ $value->p_type }}
          @endif
        </td>
        <td class="p-4 w-1/4">{{ $value->hotel_name }}</td>
				<td class="p-4 w-1/4">{{ $value->company_name }}</td>
				<td class="p-4 w-1/4">
          <a href="{{ route('Admin.show',$value->name) }}">
            <button class="px-5 py-2 text-blue-500">View</button>
          </a>
        </td>
			</tr>
      @endforeach
			
		</tbody>
	</table>
</div>
@endsection