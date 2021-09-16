@extends('layouts.default')

@section('content')
@section('title')
    <title>Add Program::</title>
@endsection
<div>
    <h2>Add Program</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="flex justify-center mt-10">
        <form class="" action="{{ route('add-program') }}" method="post">
        @csrf
        <div class="mb-4">
            <input class="shadow appearance-none border rounded w-full py-2 px-3
                text-gray-700 leading-tight focus:outline-none
                focus:shadow-outline" type="text" name="program_name" placeholder="Enter program name">
            @error('program_name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <span class="block text-gray-700 text-sm font-bold mb-2">$</span>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3
                text-gray-700 mb-3 leading-tight focus:outline-none
                focus:shadow-outline"
                type="text" name="cost" placeholder="Enter cost">
            @error('cost')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <span class="block text-gray-700 text-sm font-bold mb-2">Excursion Date</span>
            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3
                text-gray-700 mb-3 leading-tight focus:outline-none
                focus:shadow-outline"
                name="excursion_date">
            @error('excursion_date')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-green-300 hover:bg-green-500 text-white font-bold
                py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Add
            </button>
        </div>
    </form>
    </div>
    <div>
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Program Name</th>
                <th class="px-4 py-3">Cost</th>
                <th class="px-4 py-3">Excursion Date</th>
            </tr>
            {{-- {{ dd($programs) }} --}}
            <!-- each row -->
            @foreach ($programs as $program)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3">{{ $program->program_name }}</td>
                    <td class="px-4 py-3">{{ $program->cost }}</td>
                    <td class="px-4 py-3">{{ $program->excursion_date }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
