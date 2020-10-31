@extends('back.layouts.master')
@section('title','cv')
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
            <h5 class="panel-title">CV göndərənlər</h5>
            <div class="heading-elements">
                <a href="{{route('admin.cv.create')}}"><span class="label label-success">Cv əlavə et</span></a>
            </div>
        </div>

        <table class="table datatable-responsive-row-control">
            <thead>
            <tr>
<th></th>
                <th>ID</th>
                <th>AD,Soyad,Ata Adı</th>
                <th>Ixtisas</th>
              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column descending">Date</th>
                <th>Delivered time</th>
                <th>Payment</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Home</th>
                <th>Content</th>
                <th>Show</th>
                <!--<th class="text-center">Düzəlişlər</th>-->
            </tr>
            </thead>
            <tbody>

            @if($items->count()>0)
                @foreach($items as $key=>$item)
                    <tr {{$item->is_show==0 ? 'style=background:#38d28f;' : ''}} >

                        <td >{{$item->unique_id}}</td>
                        <td >{{$item->name.','.$item->surname.','.$item->f_name}}</td>

                        <td ><a class=" btn btn-info" >{{$item->role ?? ''}}</a>
                        </td>
                        <td style="color: green;font-weight: bold">
{{--                          {{$item->total}} AZN--}}
                        </td>



                        <td>
                            <a href="">{{$item->updated_at ?? ''}}</a>
                        </td>


                        <td>
{{--                            <a href="">{{$item->customTime ??  $item->time1.'-'.$item->time2 }}</a>--}}
                        </td>
                        <td>
                            @if($item->payment==1)
                       <span class="label label-success">  online </span>
                        @elseif($item->payment==2)
                       <span class='label label-default'>  kart kuryer </span>
                        @else
                       <span class='label label-info' >  kuryere nagd pul </span>
                        @endif</td>
                        <td>
                            <a href="">{{$item->street}}</a>
                        </td>
                        <td>
                            <a href="">{{$item->phone}}</a>
                        </td>
                        <td>
                            <a href="">{{$item->home}}</a>
                        </td>
                        <td>
                            <a href="">{{$item->content}}</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.cv.show',$item->order_unique_id)}}">show</a>
                        </td>



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

