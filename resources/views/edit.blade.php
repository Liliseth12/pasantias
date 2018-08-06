<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar datos de empleado</h2><br  />
        <form method="post" action="{{action('EmployeeController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nombre:</label>
            <input type="text" class="form-control" name="firstname" value="{{$employee->firstname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="LastName">Apellido:</label>
            <input type="text" class="form-control" name="lastname" value="{{$employee->lastname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Correo Electrónico</label>
              <input type="text" class="form-control" name="email" value="{{$employee->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="CI">Cédula de Identidad:</label>
              <input type="text" class="form-control" name="ci" value="{{$employee->ci}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="PhoneNumber">Número de Contacto</label>
              <input type="text" class="form-control" name="phonenumber" value="{{$employee->phonenumber}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Fecha Ingreso: </strong>  
            <input class="date form-control" type="date" id="datepicker" name="date" value="{{$employee->entrydate}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>