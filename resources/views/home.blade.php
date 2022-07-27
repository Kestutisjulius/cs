@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>visos Paslaugos</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($paslaugos as $paslauga)
                                <li class="list-group-item">
                                    <div class="service-bin">
                                        <div class="service-box">
                                            <h2>{{$paslauga->name}}</h2>
                                        </div>
                                        <div class="trijule">
                                            <form class="controls" action="{{route('ic_store')}}" method="post">
                                                @if(Auth::user()?->role > 0)
                                                @csrf
                                                @method('post')
                                                    <input class="form-control-sm " type="number" name="paslauga_count" value="1">
                                                    <button class="btn btn-primary m-2 btn-sm">reikia</button>
                                                    <input type="hidden" value="{{$paslauga->id}}" name="paslauga_id">
                                                    <label for="deadline">deadline:</label>
                                                    <input type="date" id="deadline" name="deadline">
                                                @endif

                                            </form>

                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">?ner paslaugu, ner ... ner... nerrr :( ...</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

