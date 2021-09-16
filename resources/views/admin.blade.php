@extends('layouts.default')

@section('content')
    @section('title')
        <title>Admin Panel::</title>
    @endsection

    <div>
        <h1>Admin Panel</h1>
        <ul>

            <a href="{{ route('hotel') }}">
                <button>
                    Add Hotel
                </button>
            </a>
            <a href="{{ route('company') }}">
                <button>
                    Add Company
                </button>
            </a>
            <a href="{{ route('add-program') }}">
                <button>
                    Add Program
                </button>
            </a>
        </ul>
        
    </div>
@endsection