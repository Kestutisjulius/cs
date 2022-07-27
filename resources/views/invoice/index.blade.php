@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>mano uzsakymai</h1>
                        <div> rusiuoti:
                            <a href="{{route('ic_index', ['sort' => 'asc'])}}">A to Z</a>
                            <a href="{{route('ic_index', ['sort' => 'desc'])}}">Z to A</a>
                            <a href="{{route('ic_index')}}">Reset</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($invoices as $invoice)
                                <li class="list-group-item">
                                    <div class="service-bin">
                                        <div class="service-box">
                                            <h2>{{$invoice->number}}</h2>
                                        </div>
                                        <div class="trijule">
                                            <h5>{{$invoice->deadline}}</h5>
                                            <a class="btn btn-outline-primary m-2" href="{{route('ic_index', $invoice)}}">Show</a>

                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">?ner uzsakymu ?????, ner biznio.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

