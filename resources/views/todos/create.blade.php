@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-5 offset-sm-3">
    <h3 class="display-4">Dodaj knjigu</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('todos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="naslov">Naslov:</label>
              <input type="text" class="form-control" name="naslov"/>
          </div>

          <div class="form-group">
              <label for="autor">Autor:</label>
              <input type="text" class="form-control" name="autor"/>
          </div>

          <div class="form-group">
              <label for="zanr">Zanr:</label>
              <input type="text" class="form-control" name="zanr"/>
          </div>
          <div class="form-group">
              <label for="isbn">Isbn:</label>
              <input type="text" class="form-control" name="isbn"/>
          </div>
          <div class="form-group">
              <label for="dostupno">Dostupno:</label>
              <input type="text" class="form-control" name="dostupno"/>
          </div>                        
          <button type="submit" class="btn btn-success">Dodaj knjigu</button>
      </form>
  </div>
</div>
</div>
@endsection

