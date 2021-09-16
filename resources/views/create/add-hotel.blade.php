@extends('layouts.default')

@section('content')
@section('title')
    <title>Add Hotel::</title>
@endsection
<div>
    <h3>Add Hotel</h3>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <form action="{{ route('add-hotel') }}" method="post">
        @csrf
        <div>
            <input type="text" class="@error('hotel_name') @enderror" name="hotel_name"
                placeholder="Please enter hotelname">
            @error('hotel_name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button>
                Add
            </button>
        </div>
    </form>
    <div>
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Hotel Name</th>
            </tr>
{{-- {{ dd($hotels) }} --}}
            <!-- each row -->
            @foreach($hotels as $hotel)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3">{{ $hotel->hotel_name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
