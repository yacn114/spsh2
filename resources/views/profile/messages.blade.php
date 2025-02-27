		@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>موفق!</strong> {{ session('success') }}
        
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>خطا!</strong> {{ session('error') }}
        
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>خطاها:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
    </div>
@endif