@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4>Результаты поиска "{{ $query }}"</h4>
    <div class="row row-30">

        @foreach ([
            'skins' => ['items' => $skins, 'route' => 'skins.single'],
            'lockers' => ['items' => $lockers, 'route' => 'locker.single'],
            'pencils' => ['items' => $pencils, 'route' => 'pencil.single'],
            'baths' => ['items' => $baths, 'route' => 'bath.single'],
            'mirrors' => ['items' => $mirrors, 'route' => 'mirror.single']
        ] as $type => $data)
            @foreach ($data['items'] as $item)
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                    <article class="product wow fadeInRight">
                        <div class="product-body">
                            <div class="product-figure">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->titleRu }}" width="200">
                            </div>
                            <h5 class="product-title">
                                <a href="{{ route($data['route'], $item->id) }}">
                                    {{ app()->getLocale() === 'ru' ? $item->titleRu : $item->titleEn }}
                                </a>
                            </h5>
                            <div class="product-price-wrap">
                                <div class="product-price product-price-old price-none">
                                    Emmy
                                </div>
                            </div>
                        </div>
                        <div class="product-button-wrap">
                            <div class="product-button">
                                <a class="button button-gray-14 button-zakaria fl-bigmug-line-search74"
                                    href="{{ route($data['route'], $item->id) }}"></a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        @endforeach

        @if (
            $skins->isEmpty() &&
            $lockers->isEmpty() &&
            $pencils->isEmpty() &&
            $baths->isEmpty() &&
            $mirrors->isEmpty()
        )
            <p style="color: #888">Չկան արդյունքներ:</p>
        @endif
    </div>
</div>
@endsection
