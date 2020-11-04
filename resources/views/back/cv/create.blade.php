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
                           <a href="{{route('admin.cv.index')}}"><span  class="label label-success">CV lere QAYIT</span></a>
                            </div>

                            <form action="{{route('admin.cv.store')}}" class="form-horizontal"
                                  method="Post"
                                  enctype="multipart/form-data">
                                @csrf
                                <fieldset class="content-group">
                                    <legend class="text-bold">Haqqinda <i class="icon-home"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="name" value="{{old('name')}}" class="form-control input-xlg" placeholder="Adı" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="surname" value="{{old('surname')}}" class="form-control input-lg" placeholder="Soyadı">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text"  name="f_name" value="{{old('f_name')}}" class="form-control" placeholder="Ata adi">
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
                                                        <input type="text" name="name" value="{{old('city')}}" class="form-control input-xlg" placeholder="Şəhər" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-car2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text"  name="adress" value="{{old('adress')}}" class="form-control" placeholder="Adres">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-location4"></i>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div style="margin-top: 15px" class=" col-md-12">
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input type="text" name="email" value="{{old('email')}}" class="form-control input-xlg" placeholder="Email" required="required">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-envelop"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <select name="gender"  class="form-control" data-placeholder="Cins..." >
                                                            <optgroup >
                                                                <option value="chrome" selected="selected">Cins Seçimi</option>
                                                                <option value="kisi">Kişi</option>
                                                                <option value="qadin" >Qadın</option>

                                                            </optgroup>
                                                        </select>
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-users2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <select  class="form-control" data-placeholder="Cins..." >
                                                            <optgroup >
                                                                <option name="family" value="chrome" selected="selected">Ailə Vəziyyəti</option>
                                                                <option value="evli">Evli</option>
                                                                <option value="subay" >Subay</option>

                                                            </optgroup>
                                                        </select>
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-users4"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  has-feedback has-feedback-left">

                                                            <input name="dob" class="form-control" type="date" name="datetime">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-calendar"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">Təhsil <i class="icon-notebook"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <select  name="education_degree" class="form-control" data-placeholder="Dərəcə..." >
                                                            <optgroup >
                                                                <option value="chrome" selected="selected">Təhsil Dərəcəsi</option>
                                                                <option value="ali">Ali</option>
                                                                <option value="magistr" >Magistr</option>
                                                                <option value="natamam" >Natamam</option>

                                                            </optgroup>
                                                        </select>
                                                        <div class="form-control-feedback">
                                                            <i class="  icon-user-check"></i>
                                                        </div>
                                                    </div>

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
                                                        <select name="experience"  class="form-control" data-placeholder="Dərəcə..." >
                                                            <optgroup >
                                                                <option value="chrome" selected="selected">Təcrübə Müddəti</option>
                                                                <option value="yoxdur">Yoxdur</option>
                                                                <option value="1 ildən az" >1 ildən az</option>
                                                                <option value="1 -3 il" >1 -3 il</option>
                                                                <option value="3 ildən çox" >3 ildən çox</option>

                                                            </optgroup>
                                                        </select>
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-list-numbered"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-feedback has-feedback-left">

                                                        <input class="form-control" type="text" placeholder="is" name="work">
                                                        <div class="form-control-feedback">
                                                            <i class="  icon-briefcase3"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">Dil və Bacarıqlar <i class="icon-briefcase"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">



                                                    <div class="form-group  has-feedback has-feedback-left">
                                                        <textarea name="language_skills" rows="5" cols="5" class="form-control" placeholder="Xarici Dil"></textarea>
                                                        </textarea>
                                                        <div class="form-control-feedback">
                                                            <i class="   icon-sphere"></i>
                                                        </div>

                                                    </div>

                                                    <div class="form-group  has-feedback has-feedback-left">
                                                        <textarea name="computer_skills" rows="5" cols="5" class="form-control" placeholder="Komputer Bcarığı"></textarea>
                                                        </textarea>
                                                        <div class="form-control-feedback">
                                                            <i class="   icon-laptop"></i>
                                                        </div>

                                                    </div>
                                                    <div class="form-group  has-feedback has-feedback-left">
                                                        <textarea name="sertification" rows="5" cols="5" class="form-control" placeholder="Sertifikatlar"></textarea>
                                                        </textarea>
                                                        <div class="form-control-feedback">
                                                            <i class="   icon-certificate"></i>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">Əlavə Məlumat <i class="icon-briefcase"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">




                                                    <div class="form-group  has-feedback has-feedback-left">
                                                        <textarea name="in_addition" rows="5" cols="5" class="form-control" placeholder="Digər bilik və bacarıqlar"></textarea>
                                                        </textarea>
                                                        <div class="form-control-feedback">
                                                            <i class="  icon-folder-plus4"></i>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <legend class="text-bold">İşlə Bağlı Məlumatlar<i class="icon-briefcase"></i> </legend>

                                    <div class="form-group">

                                        <div class="col-lg-10">
                                            <div class="row">


                                                <div style="margin-top: 15px" class=" col-md-12">

                                                    <div class="form-group has-feedback has-feedback-left">
                                                        <input class="form-control" type="text"  placeholder="İxtisas" name="role">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-users2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  has-feedback has-feedback-left">

                                                        <input class="form-control" type="number" placeholder="maas" name="salary">
                                                        <div class="form-control-feedback">
                                                            <i class=" icon-cash"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-feedback has-feedback-left">

                                                        <input class="form-control" type="submit"  value="Göndər" name="datetime">

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
