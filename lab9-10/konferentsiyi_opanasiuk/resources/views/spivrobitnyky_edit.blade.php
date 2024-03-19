@extends('index')

@section('cont')
  <div class="row">
    <div class="col-6 text-center mx-auto">
      <h2 class="text-primary">Співробітники <br> (редагування)</h2>

      @if($errors->any()) <!-- якщо є помилки -->

      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error) <!-- цикл по всіх помилках -->
          <li>{{ $error }}</li> <!-- показуємо помилку -->

          @endforeach
        </ul>
      </div>

      @endif

      <form method="post" name="form1" action="{{ route('spivrobitnyky_edit_submit', $data->id_spivrobitnyky) }}">
        @csrf
        <div class="form-group">
          <label for="id_kafedry">Кафедра</label>
          <input list="id" class="form-control" name="id_kafedry" placeholder="Виберіть кафедру" autocomplete="off" value="{{ $data->id_kafedry }}">
          <datalist id="id">
            @foreach ($data2 as $element)
              <option value="{{ $element->id_kafedry }}">
                {{ $element->nazva_kafedry }}
              </option>
            @endforeach
          </datalist>
        </div>


        <div class="form-group">
          <label for="prizvyshche">Прізвище</label>
          <input type="text" class="form-control" name="prizvyshche" placeholder="Вкажіть прізвище" value="{{ $data->prizvyshche }}">
        </div>

        <div class="form-group">
          <label for="imya">Ім'я</label>
          <input type="text" class="form-control" name="imya" placeholder="Вкажіть ім'я" value="{{ $data->imya }}">
        </div>

        <div class="form-group">
          <label for="pobatkovi">По-батькові</label>
          <input type="text" class="form-control" name="pobatkovi" placeholder="Вкажіть по-батькові" value="{{ $data->pobatkovi }}">
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
