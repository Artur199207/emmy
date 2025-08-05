@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }

        .form-action {
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
        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Вернуться к панели инструментов</a>
        <form action="{{ route('pic.store') }}" method="POST" enctype="multipart/form-data">
            @csrf




            <div class="mb-3">
                <label for="image" class="form-action">главная страница изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>








            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('team.index') }}" class="btn btn-success">Назад</a>
        </form>
    </div>

    <script>
        const toggle = document.getElementById('specialPriceToggle');
        const priceInput = document.getElementById('price');
        const price1Container = document.getElementById('price1Container');
        const price1Input = document.getElementById('price1');

        toggle.addEventListener('change', function() {
            if (this.checked) {
                price1Container.style.display = 'block';
                price1Input.value = priceInput.value;
            } else {
                price1Container.style.display = 'none';
                price1Input.value = '';
            }
        });
    </script>
    <script>
        function addNewSize() {
            const input = document.getElementById('new-size');
            const select = document.getElementById('size-select');
            const value = input.value.trim();

            if (value !== '') {
                const optionExists = Array.from(select.options).some(option => option.value === value);

                if (!optionExists) {
                    const newOption = new Option(value, value, true, true); // selected=true
                    select.add(newOption);
                    input.value = ''; // reset input
                }
            }
        }
    </script>
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
    </script>
@endsection
