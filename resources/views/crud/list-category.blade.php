@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="table-responsive col-8">
                <div class="row"><h2>دسته بندی ها</h2></div>
                @include('profile.messages')
                <table class="table dash_list">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان</th>
    
                            <th scope="col">زیر دسته ی ..</th>
                             <th scope="col">جزيیات</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $categories)
    
    
                        <tr>
    
    
                        <th scope="row">{{$loop->index +1}}</th>
                        <td><a href="#"><h6>{{$categories->name}}</h6></a></td>
                            <td><span class="trip" style="font-size:15px">{{$categories->parent->name ?? ""}}</span></td>
    
                            <td>
                                <div class="row">
                                <a class="m-2" href="{{route("editCategory",$categories->id)}}"><button class="btn btn-info">ویرایش</button></a>
                                <form action="{{route('destroycategory',$categories->id)}}" class="m-2" method="post">@csrf @method("DELETE")<button class="btn btn-danger" type="submit">حذف</button></a></form>
                            </div>
                        
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