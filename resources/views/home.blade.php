@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="card-header">
                        <h1>visi uzsakymai</h1>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">

                            @forelse($paslauga as $_)
                                <li class="list-group-item">
                                    <div class="service-bin">
                                        <div class="service-box">

                                            <h6>{{$_->name}}</h6>
                                        </div>
                                        <div class="trijule invoice-row">
                                                <div>
                                                    sumoketi: {{$_}}
                                                </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">nebuvo uzsakymu. nebus ir duonos</li>
                            @endforelse
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
