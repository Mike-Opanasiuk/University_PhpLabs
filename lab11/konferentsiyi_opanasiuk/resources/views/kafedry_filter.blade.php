@extends('index')

@section('cont')
<div class="row">
  <div class="col-12 text-center">
    <h1 class="text-primary">Співробітники</h1>
  </div>
</div>

<div class="row">
  <div class="col-6 text-center mx-auto">
    <form method="get" name="form1" class="form-inline" action="{{ route('spivrobitnyky') }}">
      @csrf
      <div class="form-group mx-auto">
        <div class="form-group">
          <div class="input-group-text">по кафедрі</div>
          <div class="form-group">
            <input list="id" class="form-control" name="nazva_kafedry" placeholder="Виберіть кафедру" autocomplete="off">
          </div>
          <datalist id="id">
            @foreach ($data as $element)
            <option value="{{ $element->nazva_kafedry }}"></option>
            @endforeach
          </datalist>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary mx-1 mx-2">Показати</button>
      </div>
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
