@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        invoice number: <span class="invoice-row">{{$invoice->number}},</span> invoice id:[{{$invoice->id}}]
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">created at: <span class="createdAt">{{$invoice->created_at}}</span></h5>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item list-group-item-action list-group-item-primary">
                                    ::AUTOSERVISAS:: {{$autoservisas->name}}, Tel: {{$autoservisas->phone}}, Adresas: {{$autoservisas->address}}
                                </li>
                                <li class="list-group-item list-group-item-action list-group-item-light">
                                    ::PASLAUGA:: {{$invoice->paslauga->name}}, kainuojanti: {{$invoice->paslauga->price}}
                                </li>
                                <li class="list-group-item list-group-item-action list-group-item-dark">
                                    ::uzsakovas:: {{$invoice->user->name}}, sumokeja: <span class="invoice-row">{{$invoice->suma}} </span>
                                </li>
                                <li class="list-group-item list-group-item-action list-group-item-light">
                                    (::mechanikas- {{$autoservisas->mechanikas->name}} {{$autoservisas->mechanikas->surname}})
                                    ::reitingas-<span class="rating"> @foreach(range(1, $autoservisas->mechanikas->rating) as $_) * @endforeach </span>
                                    <img style="width: 100px" src="{{$autoservisas->mechanikas->photo}}">
                                </li>
                            </ol>
                    </div>
                    <div class="card-footer text-muted">
                        <span class="createdAt">darbu atlikimo terminas: {{$invoice->deadline}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
