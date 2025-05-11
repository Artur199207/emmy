@extends('layouts.app')

@section('content')
<style>
    .form-action{
            text-align: left;
    width: 100%;
    margin-bottom: 15px;
    font-size: 18px;
        }
</style>

    <div class="container">
        <h1>Добавить новый элемент</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3">🔙 Вернуться к панели инструментов</a>

        <form action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="descriptionRu" class="form-action">Описание (RU)</label>
                <textarea name="descriptionRu" id="mySummernote" class="form-control" rows="4" required>{{ old('descriptionRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionEn" class="form-action">Описание (EN)</label>
                <textarea name="descriptionEn" id="mySummernote1" class="form-control" rows="4" required>{{ old('descriptionEn') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-action">Изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('offers.index') }}" class="btn btn-success">Назад</a>
        </form>
    </div>
@endsection
