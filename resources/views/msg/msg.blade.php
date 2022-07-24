
@if(session('success'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('deleted'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-danger">
                    {{ session('deleted') }}
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('info'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-secondary">
                    {{ session('info') }}
                </div>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="alert">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

