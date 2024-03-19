
@extends('index')

@section('cont')

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center mx-auto">
    <h2 class="text-primary">Кафедри <br> (редагування)</h2>

    @if($errors->any()) <!-- якщо є помилки -->

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error) <!-- цикл по всіх помилках -->
        <li>{{ $error }}</li> <!-- показуємо помилку -->

        @endforeach
      </ul>
    </div>

    @endif

    <form method="post" name="form1" action="{{ route('kafedry_edit_submit', $data->id_kafedry) }}">
      @csrf
      <div class="form-group">
        <label for="nazva_kafedry">Назва кафедри</label>
        <input type="text" class="form-control" name="nazva_kafedry" placeholder="Введіть назву кафедри" value="{{ $data->nazva_kafedry }}">
      </div>
      <div class="form-group">
        <label for="roztashuvannya">Розташування</label>
        <input type="text" class="form-control" name="roztashuvannya" placeholder="Введіть розташування кафедри" value="{{ $data->roztashuvannya }}">
      </div>
      <button type="submit" class="btn btn-primary mx-2 my-2">Зберегти</button>
      <button type="reset" class="btn btn-primary">Очистити</button>
    </form>
  </div>
</div>

@endsection

@section('title')Конференції - кафедри@endsection
