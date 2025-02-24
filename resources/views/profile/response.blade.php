@extends('profile.base')
@section('content')


<style>
    body {
        background-color: #f8f9fa;
    }
    .ticket-box {
        max-width: 600px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="container">
                <div class="ticket-box">
                    <h4 class="text-center text-primary">پاسخ تیکت</h4>
            
                    <div class="mb-3">
                        <h5>سوال شما:</h5>
                        <p class="alert alert-secondary">{{ $ticket->description_user }}</p>
                    </div>
            
                    <div class="mb-3">
                        <h5> پاسخ مدیر:</h5>
                        @if($ticket->description_admin)
                            <p class="alert alert-secondary">{{ $ticket->description_admin }}</p>
                        @else
                            <p class="alert alert-warning">هنوز پاسخی ارسال نشده است.</p>
                        @endif
                    </div>
                </div>
            </div>
            
    </div>
</div>
@endsection