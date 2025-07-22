@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')

<h2>Բոլոր հաղորդագրությունները</h2>
<table>
    <thead>
        <tr>
            <th>Անուն</th>
            <th>Ազգանուն</th>
            <th>Email</th>
            <th>Հեռախոս</th>
            <th>Հաղորդագրություն</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection