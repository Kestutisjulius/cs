@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>visos Paslaugos</h1>
                        <div> rusiuoti:
                            <a href="{{route('pc_index', ['sort' => 'asc'])}}">A to Z</a>
                            <a href="{{route('pc_index', ['sort' => 'desc'])}}">Z to A</a>
                            <a href="{{route('pc_index')}}">Reset</a>
                        </div>
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
                                            <a class="btn btn-outline-primary m-2" href="">Show</a>

                                            <a class="btn btn-outline-success m-2" href="">Edit</a>
                                            <form  action="" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger m-2">Kill</button>
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

