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
    <h1>Խմբագրել բանները</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titleRu" class="form-action">Վերնագիր (RU)</label>
            <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $banner->titleRu) }}" required>
        </div>

        <div class="mb-3">
            <label for="titleEn" class="form-action">Վերնագիր (EN)</label>
            <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $banner->titleEn) }}" required>
        </div>

        <div class="mb-3">
            <label for="descriptionRu" class="form-action">Նկարագրություն (RU)</label>
            <textarea name="descriptionRu" class="form-control" rows="4" required>{{ old('descriptionRu', $banner->descriptionRu) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="descriptionEn" class="form-action">Նկարագրություն (EN)</label>
            <textarea name="descriptionEn" class="form-control" rows="4" required>{{ old('descriptionEn', $banner->descriptionEn) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-action">Ընթացիկ Նկարը</label><br>
            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" width="150">
        </div>

        <div class="mb-3">
            <label for="image" class="form-action">Նոր Նկար (ըստ ցանկության)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Թարմացնել</button>
        <a href="{{ route('banners.index') }}" class="btn btn-primary">Հետ</a>
    </form>
</div>
@endsection
