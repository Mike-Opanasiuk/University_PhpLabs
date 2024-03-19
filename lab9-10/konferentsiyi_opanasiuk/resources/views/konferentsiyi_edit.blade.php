@extends('index')

@section('cont')
  <div class="row">
    <div class="col-6 text-center mx-auto">
      <h2 class="text-primary">Конференції <br> (редагування)</h2>

      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form method="post" name="form1" action="{{ route('konferentsiyi_edit_submit', $data->id_konferentsiyi) }}">
        @csrf
        <div class="form-group">
          <label for="id_spivrobitnyky">Відповідальний</label>
          <input list="id" class="form-control" name="id_spivrobitnyky" placeholder="Вкажіть відповідального" autocomplete="off" value="{{ $data->id_spivrobitnyky }}">
          <datalist id="id">
            @foreach ($data2 as $element)
            <option value="{{ $element->id_spivrobitnyky }}">
              {{ $element->prizvyshche }} {{ $element->imya }}
            </option>
            @endforeach
          </datalist>
        </div>

        <div class="form-group">
          <label for="nazva_konferentsiyi">Назва конференції</label>
          <input type="text" class="form-control" name="nazva_konferentsiyi" placeholder="Вкажіть назву" value="{{ $data->nazva_konferentsiyi }}">
        </div>

        <div class="form-group">
          <label for="data_pochatku">Дата початку</label>
          <input type="date" class="form-control" name="data_pochatku" placeholder="Початок" value="{{ $data->data_pochatku }}">
        </div>

        <div class="form-group">
          <label for="data_zakinchennya">Дата закінчення</label>
          <input type="date" class="form-control" name="data_zakinchennya" placeholder="Закінчення" value="{{ $data->data_zakinchennya }}">
        </div>

        <input type="hidden" name="MM_insert" value="form1" />
        <button type="submit" class="btn btn-primary mx-2 my-2">Зберегти</button>
        <button type="reset" class="btn btn-primary">Очистити</button>
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

