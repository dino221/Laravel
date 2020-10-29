@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
<h2 class="display-3">Online Todo Bookstore</h2>


<marquee>ONLINE TODO BOOKSTORE</marquee> 


  <table class="table">

    <thead>
        <tr>
          <td>ID</td>
          <td>Naslov</td>
          <td>Autor</td>
          <td>Zanr</td>
          <td>Isbn</td>
          <td>Dostupno</td>
          <td colspan = 3>Actions</td>
        </tr>
    </thead>
    <tbody>

        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->naslov}}</td><br>
            <td>{{$todo->autor}}</td>
            <td>{{$todo->zanr}}</td>
            <td>{{$todo->isbn}}</td>
            <td>{{$todo->dostupno}}</td>
            <td>


                <a href="{{ route('todos.edit',$todo->id)}}" class="btn btn-success">Edit</a>
            </td>
            <td>
                <form action="{{ route('todos.destroy', $todo->id)}}" method="post">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection




<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div>
    <a style="margin: 25px;" href="{{ route('todos.create')}}" class="btn btn-success">Dodaj knjigu</a>
    </div> 

    