@extends('layouts.default')

@section('content')
@section('title')
    <title>Programs::</title>
@endsection
<div>
    @foreach ($programs as $program)
        <a href="{{ route('programs.show',$program->id) }}">
            <button type="button" class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue rounded">
                {{ $program->program_name }}
            </button>
        </a>
    @endforeach
</div>
@endsection
