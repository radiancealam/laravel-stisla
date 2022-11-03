@extends('layouts.main')

@section('content')
    <div class="section-header">
        <h1>{{ $title }}</h1>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ticket.create') }}" method="POST">
                        @csrf
                        @method('POST')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
