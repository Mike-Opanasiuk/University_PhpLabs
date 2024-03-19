@extends('index')

@section('cont')
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="text-primary">Кафедри</h1>
      <div class="text-right">
        <a href="/kafedry_add" class="btn btn-primary btn-sm my-2">Додати запис</a>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="text-dark table-primary">
              <th></th>
              <th></th>
              <th scope="col">Код кафедри</th>
              <th scope="col">Назва</th>
              <th scope="col">Розташування</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $element)
            <tr class="text-dark">
              <td>
                <a href="{{ route('kafedry_del', $element->id_kafedry) }}"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Ви впевнені, що хочете видалити запис?')"
                   data-toggle="tooltip" title="Видалити">
                </a>
              </td>
              <td>
                <a href="{{ route('kafedry_edit', $element->id_kafedry) }}"
                   class="btn btn-warning btn-sm"
                   data-toggle="tooltip" title="Редагувати">
                </a>
              </td>
              <td>{{ $element->id_kafedry }}</td>
              <td>{{ $element->nazva_kafedry }}</td>
              <td>{{ $element->roztashuvannya }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('title')
  Конференції - Кафедри
@endsection

@section('header')
  @parent
    - Кафедри
@endsection
