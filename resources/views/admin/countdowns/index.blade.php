@extends('layouts.app')

@section('content')
<h1>Countdown List</h1>
<a href="{{ route('admin.countdowns.create') }}">Add New</a>

@foreach ($countdowns as $cd)
    <div>
        <h3>{{ $cd->title }}</h3>
        <p>From: {{ $cd->starts_at }} | To: {{ $cd->ends_at }}</p>
        <a href="{{ route('admin.countdowns.edit', $cd) }}">Edit</a>
    </div>
@endforeach
@endsection
