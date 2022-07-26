@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">naujas Mechanikas</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('mc_store')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Vardas</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-end">Pavarde</label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="photo" class="col-md-4 col-form-label text-md-end">FOTO.</label>
                                <div class="col-md-6">
                                    <input id="photo" type="text" class="form-control" name="photo" >
                                </div>
                            </div>

                            <div class="col-5 mb-3">
                                <label for="reitingas" class="col-md-4 col-form-label text-md-end">reitingas</label>
                                <select id="reitingas" name="reitingas" class="form-select form-select-sm">

                                        <option value="1">prastas</option>
                                        <option value="2">beveik prastas</option>
                                        <option value="3">vidutinis</option>
                                        <option value="4">aukstesnis</option>
                                        <option value="5">aukstas</option>

                                </select>
                                <label for="paslaugos" class="col-md-4 col-form-label text-md-end">paslaugos</label>
                                <select id="paslaugos" name="paslauga" class="form-select form-select-sm">

                                    @foreach($paslaugos as $paslauga)
                                        <option value="{{$paslauga->id}}" >{{$paslauga->name}}</option>
                                    @endforeach


                                </select>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
