@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать элемент</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Вернуться к панели инструментов</a>

        <form action="{{ route('pic.update', $pic->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


           


            <div class="mb-3">
                <label for="image" class="form-action">главная страница изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if ($pic->image)
                    <img src="{{ asset('storage/' . $pic->image) }}" alt="image" width="150" class="mt-2">
                @endif
            </div>



         

           

            <button type="submit" class="btn btn-success">Обновить</button>
            <a href="{{ route('pic.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>

    {{-- Scripts --}}
    <script>
        function addColorInput() {
            const container = document.getElementById('colorInputs');
            const div = document.createElement('div');
            div.classList.add('color-input-row', 'mb-2');
            div.innerHTML = `
                <input type="color" name="color[]" value="#000000">
                <button type="button" onclick="removeColorInput(this)" class="btn btn-sm btn-danger">Удалить</button>
            `;
            container.appendChild(div);
        }

        function removeColorInput(button) {
            button.parentElement.remove();
        }

        function addNewSize() {
            const input = document.getElementById('new-size');
            const select = document.getElementById('size-select');
            const value = input.value.trim();

            if (value !== '') {
                const exists = Array.from(select.options).some(option => option.value === value);
                if (!exists) {
                    const newOption = new Option(value, value, true, true);
                    select.add(newOption);
                    input.value = '';
                }
            }
        }
    </script>
@endsection
