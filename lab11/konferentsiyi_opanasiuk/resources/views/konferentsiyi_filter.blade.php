@extends('index')

@section('cont')
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="text-primary">Конференції</h1>
    </div>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="col-12">
      <form method="get" name="form1" class="form-inline my-2" action="{{ route('konferentsiyi') }}">
        @csrf
        <div class="form-group mx-auto">
          <div class="form-group">
            <label for="data_pochatku">з</label>
            <input type="date" class="form-control mx-2" name="data_pochatku">
          </div>
          <div class="form-group">
            <label for="data_zakinchennya">по</label>
            <input type="date" class="form-control mx-2" name="data_zakinchennya">
          </div>
          <button type="submit" class="btn btn-primary">Показати</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('title')
  Конференції - Конференції
@endsection

@section('header')
  @parent
    - Конференції
@endsection
