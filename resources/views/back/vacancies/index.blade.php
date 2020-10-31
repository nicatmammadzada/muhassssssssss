@extends('back.layouts.master')
@section('title','product')
@section('head')

    <!-- Theme JS files -->
    <script type="text/javascript" src="/back/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript"
            src="/back/assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/pages/datatables_responsive.js"></script>
@endsection
@section('page-header')
    {{--    @include('back.layouts.include.page-header',compact('crumbs'))--}}
@endsection
@section('content')
    @include('back.layouts.include.alert-messages')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Vakansiyalar</h5>
            <div class="heading-elements">
                <a href="{{route('admin.vacancies.create')}}"><span class="label label-success">YENİ Product</span></a>
            </div>
        </div>

        <table class="table datatable-responsive-row-control">
            <thead>
            <tr>
                <th>No</th>
                <th>Company</th>
                <th>Employee</th>
                <th>City</th>
                <th>phone</th>
                <th>education</th>
                <th>experience</th>
                <th>langs</th>

                <th>aile veziyyeti</th>
                <th>Vetendasliq</th>

{{--                <th class="text-center">Düzəlişlər</th>--}}
            </tr>
            </thead>
            <tbody>

            @if($items->count()>0)
                @foreach($items as $key=>$item)
                    <tr {{session()->has('id') &&  $item->id==session('id') ? 'style=background:#38d28f;' : ''}} >
                        <td>{{++$key}}</td>

                        <td><img src="{{asset('uploads/vacancies/').'/'.$item->photo}}" style="width: 100px;height: 100px; object-fit: contain" alt=""></td>
                        <td>{{$item->name}},{{$item->surname}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->adress}}</td>
                        <td>{{$item->education}}</td>
                        <td>{{$item->experience}}</td>
                        <td>{{$item->langs}}</td>

                        <td>{{$item->aile}}</td>
                        <td>{{$item->ntl}}</td>


{{--                    <td class="text-center">--}}
{{--                        <ul class="icons-list">--}}
{{--                            <li class="dropdown">--}}
{{--                                <a class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                                    <i class="icon-menu9"></i>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li><a href="{{route('admin.product.edit',$item->id)}}"><i--}}
{{--                                                class="icon-database-edit2"></i> Yenilə</a></li>--}}
{{--                                    <li><a href="{{route('admin.product.promo',$item->id)}}"><i--}}
{{--                                                class="icon-database-edit2"></i> Promokod elave et</a></li>--}}
{{--                                    <li>--}}
{{--                                        <a onclick='checkDeleteConfrim("{{route('admin.product.destroy',$item->id)}}")'><i--}}
{{--                                                class="icon-database-remove"></i> Sil</a></li>--}}
{{--                                </ul>--}}


{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </td>--}}
                    </tr>

                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

@section('foot')
    <script>
        function checkDeleteConfrim(url, parentId) {
            swal({
                title: "Silmək istədiynizdən əminsizmi?",
                text: "Silinəndən sonra bu əməliyyatı bərpa edə bilməyəcəksiniz!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        location.href = url;
                    } else {
                        swal("Heç bir əməliyyat aparılmadı");
                    }
                });


        }
    </script>

@endsection

