@extends('index')

@section('cont')
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="text-primary">Співробітники по кафедрі "{{ $nazva_kafedry }}"</h1>
    </div>
  </div>
  <div class="text-right">
    <a href="/spivrobitnyky_add" class="btn btn-primary btn-sm my-2">Додати запис</a>
  </div>
  <div class="row">
    @foreach ($data as $element)
    <div class="card text-center col-md-3">
      <div class="card-header">{{ $element->id_spivrobitnyky }}</div>
      <div class="card-body">
        <h5 class="card-title">{{ $element->prizvyshche }} {{ $element->imya }} {{ $element->pobatkovi }}</h5>
        <p class="card-text">{{ $element->imya }} {{ $element->pobatkovi }}</p>
      </div>
      <div class="card-footer text-muted">
        <a href="{{ route('spivrobitnyky_del', $element->id_spivrobitnyky) }}"
           class="btn btn-danger btn-md"
           onclick="return confirm('Ви впевнені, що хочете видалити запис ?')"
           data-toggle="tooltip" title="Видалити">
        </a>
        <a href="{{ route('spivrobitnyky_edit', $element->id_spivrobitnyky) }}"
           class="btn btn-warning btn-md"
           data-toggle="tooltip" title="Редагувати">
        </a>
      </div>
    </div>
    @endforeach
  </div>
@endsection

@section('title')
  Конференції - Співробітники
@endsection

@section('header')
  @parent
    - Співробітники
@endsection
