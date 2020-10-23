@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form action="{{url('/encuesta')}}" method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <label for="pregunta1">{{'pregunta1'}}</label>
    <input type="text" name="pregunta1" id="pregunta1" value=""> </p>


    <label for="pregunta3">{{'pregunta3'}}</label>
    <input type="text" name="pregunta3" id="pregunta3" value=""></p>


    <label for="pregunta3">{{'pregunta3'}}</label>
    <input type="text" name="pregunta3" id="pregunta3" value=""></p>

    <label for="tem">{{'tem'}}</label>
    <input type="text" name="tem" id="tem" value=""></p>






    <input type="submit" name="agregar">
</form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection