@extends('layouts.main')

@section('content')
  
  <h1>Por favor elija su combo:</h1>
  
  <form action="/combo/show" method="post">
    @csrf
    <div class="form-group row">
        @forelse ($combos as $combo)
          <div class="col-md-6">
            <input name="combo" type="radio" value="{{ $combo->id }}" required autofocus>
            <label>Combo: </label>
            <p>{{ $combo->name }}</p>
            <label>Precio:</label>
            <p>${{ $combo->cost}}</p>
          </div>
          @empty
            <p>No hay combos!!!</p>
        @endforelse
      </div> 
      <button type="submit">Elegir</button>
  </div>
  </form>

@endsection