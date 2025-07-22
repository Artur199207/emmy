@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')



   

@if(session('success'))
    <div style="background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px; color: #155724;">
        {{ session('success') }}
    </div>
@endif

<!-- Վալիդացիայի սխալներ -->
@if ($errors->any())
    <div style="background-color: #f8d7da; padding: 10px; margin-bottom: 15px; border-radius: 5px; color: #721c24;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<!-- Ֆորման -->
<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required><br>
    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>
    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"><br>
    <textarea name="message" placeholder="Message">{{ old('message') }}</textarea><br>

    <button type="submit">Submit</button>
</form>

@if(session('contact'))
    <div style="background-color: #e2e3e5; padding: 10px; margin-bottom: 15px; border-radius: 5px; color: #383d41;">
        
        <p><strong>Անուն:</strong> {{ session('contact')->first_name }} {{ session('contact')->last_name }}</p>
        <p><strong>Էլ․ հասցե:</strong> {{ session('contact')->email }}</p>
        <p><strong>Հեռախոս:</strong> {{ session('contact')->phone ?? 'Առկա չէ' }}</p>
        <p><strong>Հաղորդագրություն:</strong> {{ session('contact')->message ?? 'Առկա չէ' }}</p>
    </div>
@endif


@if($contacts->isEmpty())
        <p>No contacts found.</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
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
@endif

@endsection
