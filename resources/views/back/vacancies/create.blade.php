@extends('back.layouts.master')
@section('title','product-create')
@section('head')
    <script type="text/javascript" src="/back/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/back/assets/js/pages/form_validation.js"></script>
@endsection
@section('page-header')
    {{--    @include('back.layouts.include.page-header',compact('crumbs'))--}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
        @include('back.layouts.include.alert-messages')
        <!-- Basic layout-->

            <div class="row">
                <div class="">
                    <div class="panel panel-flat">

                        <div class="panel-heading">
                            <h6 class="panel-title">..<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse" class=""></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="panel-body" style="display: block;">
                      <div class="panel-heading">
                       <h5 class="panel-title label label-success"></h5>
                        <div class="heading-elements">
                        <a href="{{route('admin.vacancies.index')}}"><span class="label label-success">vakansiyalar qayit</span></a>
                        </div></div>

                            <form action="{{route('admin.vacancies.store')}}" class="form-horizontal"
                                  method="Post"
                                  enctype="multipart/form-data">
                                @csrf
                                <fieldset class="content-group">
                                    <legend class="text-bold">Umumi Melumatlar<i class="icon-home"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="role" value="{{old('role')}}" class="form-control input-xlg" placeholder="Rolu" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="city" value="{{old('surname')}}" class="form-control input-lg" placeholder="weher">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text"  name="age" value="{{old('age')}}" class="form-control" placeholder="yas">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text"  name="salary" value="{{old('salary')}}" class="form-control" placeholder="maas">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">


                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control input-lg" placeholder="Telefon">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-phone"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="email" name="email" value="{{old('city')}}" class="form-control input-xlg" placeholder="email" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-car2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text"  name="employer" value="{{old('employer')}}" class="form-control" placeholder="elaqeder wexs">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-location4"></i>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div style="margin-top: 15px" class=" col-md-12">
                                                    <!-- <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="name" value="{{old('email')}}" class="form-control input-xlg" placeholder="Email" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-envelop"></i>
                                                        </div>
                                                    </div>
                                                    -->
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="company" value="{{old('company')}}" class="form-control input-xlg" placeholder="company" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-envelop"></i>
                                                        </div>
                                                    </div>
                                                   
                                                    

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">Tehsil <i class="icon-notebook"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">

                                                    <div class="form-group  has-feedback has-feedback-left">

                                                        <input class="form-control" type="text" placeholder="Təhsil" name="education">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-clipboard5"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">İş və Təcrübə <i class="icon-briefcase"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <select name="experience_year"  class="form-control" data-placeholder="Dərəcə..." >
                                                            <optgroup >
                                                                <option value="muddet" selected="selected">Təcrübə Müddəti</option>
                                                                <option value="yoxdur">Yoxdur</option>
                                                                <option value="1 ilden az" >1 ildən az</option>
                                                                <option value="1-3 il" >1 -3 il</option>
                                                                <option value="3 ilden cox" >3 ildən çox</option>

                                                            </optgroup>
                                                        </select>
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-list-numbered"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-feedback has-feedback-left">

                                                        <input class="form-control" type="text" placeholder="is haqqinda" name="about_work">
                                                        <div class="form-control-feedback">
                                                            <i class="  icon-briefcase3"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">diger <i class="icon-briefcase"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">



                                                    <div class="form-group  has-feedback has-feedback-left">
                                                        <textarea name="requriment" rows="5" cols="5" class="form-control" placeholder="telebler"></textarea>
                                                        </textarea>
                                                        <div class="form-control-feedback">
                                                            <i class="   icon-sphere"></i>
                                                        </div>

                                                    </div>
                                                    <div class="text-right">
                            <button type="submit" class="btn btn-primary">Əlavə et <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                                                   
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                   
                                </fieldset>

                            </form>


                        </div>
                    </div>
                </div>

            </div>

            <!-- /basic layout -->
        </div>

    </div>
@endsection
