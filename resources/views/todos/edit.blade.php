@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update TODO</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('todos.update', $todo->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="naslov">Naslov:</label>
                <input type="text" class="form-control" name="naslov" value={{ $todo->naslov }} />
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor" value={{ $todo->autor }} />
            </div>
            <div class="form-group">
                <label for="zanr">Zanr:</label>
                <input type="text" class="form-control" name="zanr" value={{ $todo->zanr }} />
            </div>
            <div class="form-group">
                <label for="isbn">Isbn:</label>
                <input type="text" class="form-control" name="isbn" value={{ $todo->isbn }} />
            </div>
            <div class="form-group">
                <label for="dostupno">Dostupno:</label>
                <input type="text" class="form-control" name="dostupno" value={{ $todo->dostupno }} />
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection

