     @extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
        
         <a href="{{ url('/home') }}"type="button" class="btn btn-outline-success float-left" >Regresar</a>
        </div>
                

              <form action="{{url('/encuesta')}}" method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<div class="container">
<h1>Nuevo Funcionario</h1>
<hr>
<form role="form">
    <div class="well">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                    <label for="nombre" class="col-form-label col-sm-4">Nombre:</label>
                  <div class="col-sm-8">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo" tabindex="1">
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                    <label for="apellido" class="col-form-label col-sm-4">C.C.</label>
                  <div class="col-sm-8">
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Numero de documento" tabindex="2">
                  </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                    <label for="email" class="col-form-label col-sm-4">Email:</label>
                  <div class="col-sm-8"> 
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" tabindex="4">
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group row">
                    <label for="celular" class="col-form-label col-sm-4">Celular:</label>
                  <div class="col-sm-8">
                    <input type="number" name="celular" id="celular" class="form-control" placeholder="Celular" tabindex="3">
                  </div>
                </div>
            </div>

        </div>

        

        <div class="form-group row">
            <label for="contraseña" class="col-form-label col-sm-4">Programa:</label>
          <div class="col-sm-8">
            <input type="text" name="password" id="password" class="form-control" placeholder="Programa cursado" tabindex="6">
          </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">

                <div class="form-group row">
                    <label for="password" class="col-form-label col-sm-4">Facultad:</label>
                  <div class="col-sm-8">
                    <input type="text" name="password" id="password" class="form-control" placeholder="Nombre de la Facultad" tabindex="6">
                  </div>
                </div>

            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">

                <div class="form-group row">
                    <label for="password" class="col-form-label col-sm-4">Semestre:</label>
                  <div class="col-sm-8">
                    <input type="number" name="semesre" id="semestre" class="form-control" placeholder="Ingresa el semestre cursado" tabindex="7">
                  </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="btn btn-danger btn-block btn-lg" tabindex="7"
                title="Guardar datos ingresados"></div>

           
        </div>
</form>

@endsection