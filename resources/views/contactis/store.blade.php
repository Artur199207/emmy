@extends('layouts.app')
@section('title', 'Эмми Мебель – Современная и качественная мебель для вашего дома')
@section('content')
<style>
    


/* Форма отзыва */
.review{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.review-form {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    margin: 40px 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.review-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #50BECF;
}

.review-form form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.review-form input,
.review-form textarea {
    padding: 12px 16px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border 0.3s ease;
}

.review-form input:focus,
.review-form textarea:focus {
    outline: none;
    border-color: #50BECF;
}

.review-form button {
    align-self: flex-start;
    background-color: #50BECF;
    color: #fff;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.review-form button:hover {
    background-color: #50BECF;
}

/* Отзывы */
.reviews h2 {
    margin-top: 40px;
    margin-bottom: 20px;
    font-size: 24px;
    color: #5a3e36;
}

.review {
    background-color: #fff;
    padding: 20px;
    border-left: 5px solid #50BECF;
    border-radius: 6px;
    margin-bottom: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: transform 0.2s ease;
}
.productnone{
    margin-left: unset !important;
    margin-right: unset !important;
}

.review:hover {
    transform: translateY(-3px);
}

.review h3 {
    margin: 0 0 5px;
    color: #50BECF;
}

.review .product {
    font-weight: bold;
    color: #236c77;
    margin-bottom: 10px;
}

/* Футер */
footer {
    background-color: #50BECF;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    margin-top: 50px;
}

/* Адаптив */
@media (max-width: 600px) {
    .review-form form,
    .review {
        font-size: 15px;
    }

    header h1 {
        font-size: 28px;
    }

    .review-form h2,
    .reviews h2 {
        font-size: 20px;
    }
}
</style>

<main class="container">

    <section class="review-form">
        <h2>Обратная связь</h2>

        
        @if(session('success'))
            <div style="background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px; color: #155724;">
                {{ session('success') }}
            </div>
        @endif

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

            <input type="text" name="first_name" placeholder="Имя" value="{{ old('first_name') }}" required>
            <input type="text" name="last_name" placeholder="Фамилия" value="{{ old('last_name') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="text" name="phone" placeholder="Мобильный номер" value="{{ old('phone') }}">
            <textarea name="message" placeholder="Сообщение" rows="4">{{ old('message') }}</textarea>

            <button type="submit">Отправить</button>
        </form>
    </section>

    <!-- Հաստատված կոնտակտ (հաղորդագրություն) -->
    @if(session('contact'))
        <section class="review">
            <h3>{{ session('contact')->first_name }} {{ session('contact')->last_name }}</h3>
            <p class="product ">{{ session('contact')->email }} {{ session('contact')->phone ?? 'Нет в наличии' }}</p>
            <p>{{ session('contact')->message ?? 'Нет в наличии' }}</p>
        </section>
    @endif

    <!-- Բոլոր կոնտակտները -->
    @if($contacts->isEmpty())
        <p>Контакты не найдены։</p>
    @else
        <section class="reviews">
            <h2>Հաղորդագրություններ</h2>

            @foreach($contacts as $contact)
                <div class="review">
                    <h3>{{ $contact->first_name }} {{ $contact->last_name }}</h3>
                    <p class="product productnone">{{ $contact->email }} {{ $contact->phone }}</p>
                    <p>{{ $contact->message }}</p>
                </div>
            @endforeach
        </section>
    @endif

</main>

@endsection
