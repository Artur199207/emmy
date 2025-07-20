@extends('layouts.app')

@section('content')


<form action="{{ route('custom.register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Լրացրեք անունը" required />
    <input type="email" name="email" placeholder="Էլ․ հասցե" required />
    <input type="password" name="password" placeholder="Գաղտնաբառ" required />
    <input type="password" name="password_confirmation" placeholder="Կրկնել գաղտնաբառը" required />
    <input type="submit" value="Գրանցվել" />
</form>

@endsection
