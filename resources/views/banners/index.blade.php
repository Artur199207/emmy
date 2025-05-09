@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }
    </style>
    <div class="container">
        <h1>Բաններ</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3 hovcolor">Ավելացնել նոր բաններ</a>
        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Վերադառնալ Վահանակ</a>
        @if ($banners->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Վերնագիր (RU)</th>
                        <th>Վերնագիր (EN)</th>
                        <th>Նկար</th>
                        <th>Գործողություններ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ $banner->titleRu }}</td>
                            <td>{{ $banner->titleEn }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="Image" width="100">

                            </td>
                            <td>
                                <a href="{{ route('banners.edit', $banner->id) }}"
                                    class="btn btn-warning btn-sm">Խմբագրել</a>

                                <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Վստա՞հ եք, որ ցանկանում եք ջնջել։');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Ջնջել</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Բաններ դեռ չկան։</p>
        @endif


    </div>
@endsection
