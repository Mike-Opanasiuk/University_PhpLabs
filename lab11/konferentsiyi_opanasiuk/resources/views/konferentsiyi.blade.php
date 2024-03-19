@extends('index')

@section('cont')
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="text-primary">Конференції з {{ $data_pochatku }} по: {{ $data_zakinchennya }}</h1>
    </div>
  </div>

  <div class="text-right">
    <a href="/konferentsiyi_add" class="btn btn-primary btn-sm my-2">Додати запис</a>
  </div>

  <div class="row">
    @foreach ($data as $element)

    <div class="card text-center col-md-6">
      <div class="card-header">Код конференції: {{ $element->id_konferentsiyi }}</div>
      <div class="card-body">
        <h5 class="card-title">{{ $element->nazva_konferentsiyi }}</h5>
        <p class="card-text">Відповідальний: {{ $element->prizvyshche }}</p>
        <p class="card-text"><h6>{{ $element->data_pochatku_format }} - {{ $element->data_zakinchennya_format }}</h6></p>
        <p class="card-text">Тривалість: {{ $element->truvalist }} дн.</p>
      </div>
      <div class="card-footer text-muted">
        <a href="{{ route('konferentsiyi_edit', $element->id_konferentsiyi) }}"
           class="btn btn-warning btn-md"
           data-toggle="tooltip" title="Редагувати">
        </a>

        <a href="{{ route('konferentsiyi_del', $element->id_konferentsiyi) }}"
           class="btn btn-danger btn-md"
           onclick="return confirm('Ви впевнені, що хочете видалити запис?')"
           data-toggle="tooltip" title="Видалити">
        </a>
      </div>
    </div>

    @endforeach
  </div>
@endsection

@section('title')
  Конференції - Конференції
@endsection

@section('header')
  @parent
    - Конференції
@endsection
