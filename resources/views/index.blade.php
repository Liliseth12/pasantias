<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-mail</th>
        <th>C.I.</th>
        <th>Número de Contacto</th>
        <th>Fecha de Ingreso</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($employees as $employee)
      <tr>
        <td>{{$employee['id']}}</td>
        <td>{{$employee['firstname']}}</td>
        <td>{{$employee['lastname']}}</td>
        <td>{{$employee['email']}}</td>
        <td>{{$employee['ci']}}</td> 
        <td>{{$employee['phonenumber']}}</td>
        <td>{{$employee['entrydate']}}</td>
        
        <td><a href="{{action('EmployeeController@edit', $employee['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EmployeeController@destroy', $employee['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
      <div class="col-md-4">
        <a href="{{action('EmployeeController@create')}}" class="btn btn-warning">Add</a>
      </div>
  </div>
  </body>
</html>