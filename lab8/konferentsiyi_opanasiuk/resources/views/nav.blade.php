@section('nav')

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
    <img src="/favicon.ico">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> <a class="nav-link" href="#">Конференції <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Довідники </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="{{ route('kafedry') }}">Кафедри</a>
          <a class="dropdown-item" href="{{ route('kafedry_filter') }}">Співробітники</a>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="#">Вихід</a> </li>
    </ul>
  </div>
</nav>
