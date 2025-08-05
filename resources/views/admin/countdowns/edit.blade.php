@extends('layouts.app')

@section('content')
<style>
    .form-action {
        text-align: left;
        width: 100%;
        margin-bottom: 15px;
        font-size: 18px;
    }
</style>

<div class="container">
    <h1>Редактировать</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 <form method="POST"
            action="{{ isset($countdown) ? route('admin.countdowns.update', $countdown) : route('admin.countdowns.store') }}">
            @csrf
            @if (isset($countdown))
                @method('PUT')
            @endif

            <input type="text" name="title" value="{{ old('title', $countdown->title ?? '') }}" placeholder="Title">
            <input type="datetime-local" name="starts_at"
                value="{{ old('starts_at', isset($countdown) ? \Carbon\Carbon::parse($countdown->starts_at)->format('Y-m-d\TH:i') : '') }}">
            <input type="datetime-local" name="ends_at"
                value="{{ old('ends_at', isset($countdown) ? \Carbon\Carbon::parse($countdown->ends_at)->format('Y-m-d\TH:i') : '') }}">

            <button type="submit">{{ isset($countdown) ? 'Update' : 'Create' }}</button>
        </form>
   
</div>
@endsection
