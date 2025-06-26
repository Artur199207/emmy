@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }
    </style>
    <div class="container">
        <h1 style="margin-bottom:25px">элемент</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('pencil.create') }}" class="btn btn-primary mb-3 hovcolor">Добавить новый элемент</a>
        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Вернуться к панели инструментов</a>
        @if ($pencils->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок (RU)</th>
                        <th>Заголовок (EN)</th>
                        <th>Изображение:</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pencils as $pencil)
                        <tr>
                            <td>{{ $pencil->id }}</td>
                            <td>{{ $pencil->titleRu }}</td>
                            <td>{{ $pencil->titleEn }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $pencil->image) }}" alt="Image" width="100">

                            </td>
                            <td>
                                <a href="{{ route('pencil.edit', $pencil->id) }}"
                                    class="btn btn-warning btn-sm">Редактировать</a>

                                <form action="{{ route('pencil.destroy', $pencil->id) }}" method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Вы уверены, что хотите удалить?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Բլոգ դեռ չկան։</p>
        @endif


    </div>
    
@endsection
