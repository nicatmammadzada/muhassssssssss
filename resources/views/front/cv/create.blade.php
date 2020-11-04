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

                        <h1>post new candinate</h1>
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
            @include('back.layouts.include.alert-messages')
            <form action="{{route('cv.store')}}" class="form-horizontal"
                                  method="Post"
                                  enctype="multipart/form-data">
                                @csrf
             <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> haqqinda</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>sekil</label>
                                                <input type="file" name="photo" placeholder="photo">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Adi </label>
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Soyadi</label>
                                                <input type="text" name="surname" placeholder="SurName">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Ata Adi</label>
                                                <input type="text" name="f_name" placeholder="ataadi">
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
                                                <label>Unvan</label>
                                                <input type="text" name="adress" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>Cins</label>
                                                <select name="gender">
                                                    <option value="1">Qadin</option>
                                                    <option value="0">Kisi</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>Aile Veziyeti</label>
                                                <select name="family">
                                                    <option value="1">Evli</option>
                                                    <option value="0">Subay</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>dogum tarixi</label>
                                                <input type="date" name="dob" placeholder="dogum">
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> tehsil</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>derece</label>
                                                <select name="education_degree">
                                                    <option value="ali">ali</option>
                                                    <option value="natamam">natamam</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>tehsil</label>
                                                <input  type="text"  name="education" placeholder="Name">

                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> is tecrubesi</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>muddet</label>
                                                <select name="experience">
                                                    <option value="yoxdur">yoxdur</option>
                                                    <option value="1-3 il">1-3 il</option>
                                                    <option value="1 ilden az">1 ilden az</option>
                                                    <option value="3 ilden cox">3 ilden cox</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>is haqqinda</label>
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
                                                        <input type="number" onChange="transform('fontSize', this.value)" value=""
                                                               max="7" min="1" name="work">

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
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> dil ve bacariqlar</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">





                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>dil</label>
                                                <input  type="text"  name="language_skills" placeholder="language_skills">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>komp</label>
                                                <input  type="text"  name="computer_skills" placeholder="computer skills">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>sertifikat</label>
                                                <input  type="text"  name="sertification" placeholder="sertification">

                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> is tecrubesi</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>muddet</label>
                                                <select name="experience">
                                                    <option value="yoxdur">yoxdur</option>
                                                    <option value="1-3 il">1-3 il</option>
                                                    <option value="1 ilden az">1 ilden az</option>
                                                    <option value="3 ilden cox">3 ilden cox</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                                <label>work</label>
                                                <input  type="text"  name="work" placeholder="work">

                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> isle bagli melumat</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">




                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>ixtisas</label>
                                                <input type="text" name="role" placeholder="role">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>salary</label>
                                                <input type="number" name="salary" placeholder="salary">
                                            </div>
                                        </div>
                                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <input type="submit" >
                            </div>
                        </div>

                    </div>
                </div>
              </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <script>
        editor.document.designMode = "On";

        function transform(option, argument) {
            editor.document.execCommand(option, false, argument);
        }
    </script>

    @endsection


