@extends('front.layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/front/dashboard/css/style.css"/>
@endsection

@section('content')


    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>post new work</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="#"> Home </a>&nbsp; / &nbsp;</li>
                                <li>candinate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="employe_dashboard_wrapper jb_cover">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        @include('back.layouts.include.alert-messages')
                    <form action="{{route('job.store')}}" class="form-horizontal"
                                  method="Post"
                                  enctype="multipart/form-data">
                                @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>Umumi melumatlar</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>isin adi</label>
                                                <input type="text" name="role" placeholder="role">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Seher</label>
                                                <input type="text" name="city" placeholder="city">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Yas</label>
                                                <input type="text" name="age" placeholder="yas araligi">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>tehsil</label>
                                                <input type="text" name="education" placeholder="tehsil">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>Telefon</label>
                                                <input type="tel" name="phone" placeholder="tel">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>elaqedar wexs</label>
                                                <input type="text" name="epmloyer" placeholder="elaqedar wexs">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>wirket</label>
                                                <input type="text" name="company" placeholder="sirket">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>is tecrubesi</label>
                                                <input type="text" name="exprerience_year" placeholder="is tecrubesi">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>min maas</label>
                                                <input type="number" name="salary_min" placeholder="min maas">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>max maas</label>
                                                <input type="number" name="salary_max" placeholder="max maas">
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> is barede</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>iees haqqinda</label>
                                                <div class="wrapper jb_cover">
                                                    <div class="options">
                                                        <button onClick="transform('bold', null)">
                                                            <i class="fas fa-bold"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('italic', null)">
                                                            <i class="fas fa-italic"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('strikeThrough', null)">
                                                            <i class="fas fa-strikethrough"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('underline', null)">
                                                            <i class="fas fa-underline"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('justifyLeft', null)">
                                                            <i class="fas fa-align-left"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('justifyCenter', null)">
                                                            <i class="fas fa-align-center"></i>
                                                        </button>
                                                        <button onClick="transform('justifyRight', null)">
                                                            <i class="fas fa-align-right"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('insertOrderedList', null)">
                                                            <i class="fas fa-list-ol"></i>
                                                        </button>
                                                        <div class="seperator"></div>
                                                        <button onClick="transform('insertUnorderedList', null)">
                                                            <i class="fas fa-list-ul"></i>
                                                        </button>
                                                        <div class="seperator"></div>

                                                        <div class="seperator"></div>
                                                        <input type="number" onChange="transform('fontSize', this.value)" name="about_work"
                                                               max="7" min="1">

                                                    </div>

                                                    <select onChange="transform('fontName', this.value)">
                                                        <option disabled>Font</option>
                                                        <option value="Times New Roman">Times</option>
                                                        <option value="Arial">Arial</option>
                                                        <option value="Courier New">Courier New</option>
                                                        <option value="Tahoma">Tahoma</option>
                                                        <option value="Arial">Verdana</option>
                                                    </select>
                                                    <iframe name="editor" id="editor"></iframe>
                                                </div>

                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>telebler</h1>
                                </div>
                                <div class="job_overview_header jb_cover">

                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">

                                                <textarea rows="10" name="requriment" placeholder="tehsil" style="width:100%;resize:none">
                                                </textarea>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="jb_newslwtteter_button">
                                <div class="header_btn search_btn news_btn jb_cover">

                                    <input type="submit">
                                </div>
                            </div>
                  </form>
                    </div>
                </div>
            </div>
        </div>
        <!--employee dashboard wrapper end-->
        <!-- newsletter wrapper start -->

        <!-- newsletter wrapper end -->
        <!-- footer Wrapper Start -->


        <script>
            editor.document.designMode = "On";

            function transform(option, argument) {
                editor.document.execCommand(option, false, argument);
            }
        </script>

@endsection


