@extends('index')

@section('cont')
  <div class="row">
    <div class="col-6 text-center mx-auto">
      <h2 class="text-primary">Співробітники <br> (новий запис)</h2>

      @if($errors->any()) <!-- якщо є помилки -->

      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error) <!-- цикл по всіх помилках -->
          <li>{{ $error }}</li> <!-- показуємо помилку -->

          @endforeach
        </ul>
      </div>

      @endif

      <form method="post" name="form1" action="{{ route('spivrobitnyky_add_post') }}">
        @csrf
        <div class="form-group">
          <label for="id_kafedry">Кафедра</label>
          <input list="id" class="form-control" name="id_kafedry" placeholder="Виберіть кафедру" autocomplete="off">
          <datalist id="id">
            @foreach ($data as $element)
              <option value="{{ $element->id_kafedry }}">
                {{ $element->nazva_kafedry }}
              </option>
            @endforeach
          </datalist>
        </div>


        <div class="form-group">
          <label for="prizvyshche">Прізвище</label>
          <input type="text" class="form-control" name="prizvyshche" placeholder="Вкажіть прізвище">
        </div>

        <div class="form-group">
          <label for="imya">Ім'я</label>
          <input type="text" class="form-control" name="imya" placeholder="Вкажіть ім'я">
        </div>

        <div class="form-group">
          <label for="pobatkovi">По-батькові</label>
          <input type="text" class="form-control" name="pobatkovi" placeholder="Вкажіть по-батькові">
        </div>

        <button type="submit" class="btn btn-primary mx-2 my-2">Зберегти</button>
        <button type="reset" class="btn btn-primary">Очистити</button>
      </form>
    </div>
  </div>
@endsection

@section('title')
  Конференції - Співробітники
@endsection

@section('header')
  @parent
    - Співробітники
@endsection
