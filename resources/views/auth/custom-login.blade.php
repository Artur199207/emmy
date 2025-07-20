@extends('layouts.app')

@section('content')

<form action="{{ route('custom.login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Էլ․ հասցե" required />
    <input type="password" name="password" placeholder="Գաղտնաբառ" required />
    <input type="submit" value="Մուտք" />
</form>

@endsection