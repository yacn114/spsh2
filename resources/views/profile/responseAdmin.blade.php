@extends('profile.base')
@section('content')
<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
        <div class="table-responsive col-8">
            <div class="row"><h2>تیکت ها</h2></div>
            
            <table class="table dash_list">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>

                        <th scope="col">وضعیت</th>
                         <th scope="col">جزيیات</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticket as $tickets)


                    <tr>


                    <th scope="row">{{$loop->index +1}}</th>
                    <td><a href="#"><h6>{{$tickets->title}}</h6></a></td>
                        <td><span class="trip" style="font-size:15px">{{$tickets->status}}</span></td>

                        <td><a href="{{route('responseAdmin2',$tickets)}}"><button class="btn btn-success" @if ($tickets->status == "closed")
                            {{"disabled"}}
                        @endif>پاسخ دادن</button></a></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection