<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('deleted'))
                    <div class="alert alert-danger">
                        {{ session('deleted') }}
                    </div>
                @endif
                @if(session('info'))
                    <div class="alert alert-secondary">
                        {{ session('info') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
