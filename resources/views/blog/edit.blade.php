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

    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="dataRu" class="form-action">Дата (RU)</label>
            <input type="text" name="dataRu" class="form-control" value="{{ old('dataRu', $blog->dataRu) }}" required>
        </div>

        <div class="mb-3">
            <label for="dataEn" class="form-action">Дата (EN)</label>
            <input type="text" name="dataEn" class="form-control" value="{{ old('dataEn', $blog->dataEn) }}" required>
        </div>

        <div class="mb-3">
            <label for="titleRu" class="form-action">Заголовок (RU)</label>
            <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $blog->titleRu) }}" required>
        </div>

        <div class="mb-3">
            <label for="titleEn" class="form-action">Заголовок (EN)</label>
            <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $blog->titleEn) }}" required>
        </div>

        <div class="mb-3">
            <label for="descriptionRu" class="form-action">Описание (RU)</label>
            <textarea name="descriptionRu" id="mySummernote" class="form-control" rows="4" required>{{ old('descriptionRu', $blog->descriptionRu) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="descriptionEn" class="form-action">Описание (EN)</label>
            <textarea name="descriptionEn" id="mySummernote1" class="form-control" rows="4" required>{{ old('descriptionEn', $blog->descriptionEn) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="informationRu" class="form-action">Информация (RU)</label>
            <textarea name="informationRu" id="mySummernote2" class="form-control" rows="4" required>{{ old('informationRu', $blog->informationRu) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="informationEn" class="form-action">Информация (EN)</label>
            <textarea name="informationEn" id="mySummernote3" class="form-control" rows="4" required>{{ old('informationEn', $blog->informationEn) }}</textarea>
        </div>

        @if($blog->image)
        <div class="mb-3">
            <label class="form-action">Текущая фотография:</label><br>
            <img src="{{ asset($blog->image) }}" alt="Current Image" style="max-width: 200px;">
        </div>
        @endif

        <div class="mb-3">
            <label for="image" class="form-action">Новая фотография (необязательно)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@endsection
