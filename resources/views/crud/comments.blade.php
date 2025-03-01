@extends('profile.base')
@section('content')
<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
        <div class="table-responsive col-8">
            <div class="row"><h2>کامنت ها</h2></div>
            @include('profile.messages')
            <table class="table dash_list">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">کاربر</th>
                        <th scope="col">متن کامنت</th>
                        <th scope="col">اسم محصول</th>
                        <th scope="col">عملیات</th>
                         
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)


                    <tr>


                    <th scope="row">{{$loop->index +1}}</th>
                    {{-- <td><a href="#"><h6>{{$tickets->title}}</h6></a></td> --}}
                        <td><span class="trip" style="font-size:15px">{{$comment->users->name}}</span></td>
                        <td><p class="trip" style="font-size:15px;  white-space: pre-wrap; ">{{$comment->comment}}</p></td>
                        <td><span class="trip" style="font-size:15px">{{$comment->products->name}}</span></td>

                        <td>
                            <a href="{{route("activecomment",$comment)}}"><button class="btn btn-info">فعال کردن</button></a>
                        
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection