@extends('layouts.default')

@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/companyForm.css') }}">
@endsection
@section('title')
    <title>Add Company::</title>
@endsection
<div>
    <h3>Add Company</h3>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <form class="form-border" action="{{ route('add-company') }}" method="post">
        @csrf
        <div class="custom-container">
            <input type="text" name="company_name" placeholder="Enter company name">
            @error('company_name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="custom-container">
            {{-- <label for="hotel_id">Hotel: </label> --}}
            <Select class="hotel-list" name="hotel_id">
                <option disabled selected>select hotel</option>
                @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}</option>
                @endforeach
            </Select>
            @error('hotel_id')
                <span>{{ $message }}</span>
            @enderror
        </div>
        {{-- <div class="custom-container"> --}}
            <button class="button-btn">
                Add
            </button>
        {{-- </div> --}}
    </form>
    <div>
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Company Name</th>
                <th class="px-4 py-3">Guess Count</th>
                <th class="px-4 py-3">Hotel</th>
            </tr>
{{-- {{ dd($companies) }} --}}
            <!-- each row -->
            @foreach($companies as $company)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3">{{ $company->company_name }}</td>
                    <td class="px-4 py-3">
                        @if ($company->guest_count === null)
                            0
                        @else
                            {{ $company->guest_count }}
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        {{ $company->hotel->hotel_name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

