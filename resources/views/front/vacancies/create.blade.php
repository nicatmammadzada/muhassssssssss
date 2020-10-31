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
                                                <label>Adi </label>
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Soyadi</label>
                                                <input type="text" name="name" placeholder="SurName">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Ata Adi</label>
                                                <input type="text" name="name" placeholder="ataadi">
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
                                                <input type="text" name="name" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>Cins</label>
                                                <select>
                                                    <option>Qadin</option>
                                                    <option>Kisi</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>Aile Veziyeti</label>
                                                <select>
                                                    <option>Evli</option>
                                                    <option>Subay</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>dogum tarixi</label>
                                                <input type="date" name="name" placeholder="dogum">
                                            </div>
                                        </div>



{{--                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                                            <div class="select_box">--}}
{{--                                                <label>salary</label>--}}
{{--                                                <select>--}}
{{--                                                    <option>$12K - 15k P.A.</option>--}}
{{--                                                    <option>$12K - 20k P.A.</option>--}}
{{--                                                    <option> $12K - 35k P.A.</option>--}}
{{--                                                    <option>$12K - 45k P.A.</option>--}}

{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                                            <div class="select_box">--}}
{{--                                                <label>experience</label>--}}
{{--                                                <select>--}}
{{--                                                    <option>1 year experience</option>--}}
{{--                                                    <option>2 year experience</option>--}}
{{--                                                    <option> 3 year experience</option>--}}
{{--                                                    <option>4 year experience</option>--}}

{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
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
                                                <select>
                                                    <option>Qadin</option>
                                                    <option>Kisi</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>tehsil</label>
                                                <input  type="text"  name="name" placeholder="Name">

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
                                                <select>
                                                    <option>yoxdur</option>
                                                    <option>1-3 il</option>


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
                                                        <input type="number" onChange="transform('fontSize', this.value)" value="3"
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
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> dil ve bacariqlar</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">





                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>dil</label>
                                                <input  type="text"  name="name" placeholder="Name">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>komp</label>
                                                <input  type="text"  name="name" placeholder="Name">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>sertifikat</label>
                                                <input  type="text"  name="name" placeholder="Name">

                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>elave</h1>
                                </div>
                                <div class="job_overview_header jb_cover">

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
                                            <input type="number" onChange="transform('fontSize', this.value)" value="3"
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
                                                <input type="text" name="name" placeholder="Location">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>salary</label>
                                                <input type="number" name="name" placeholder="Location">
                                            </div>
                                        </div>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->
    <div class="jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> Looking For A Job</h2>
                            <p>Your next level Product developemnt company assetsYour next level Product </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#">submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                        <a href="#"><img src="/front/dashboard/images/logo2.png" alt="img"></a>
                        <ul class="footer_first_contact">
                            <li><i class="flaticon-location-pointer"></i>
                                <p>123 City Avenue, Floor 10,
                                    <br> malbourne, Australia.
                                </p>
                            </li>
                            <li><i class="flaticon-telephone"></i>
                                <p>1 -234 -456 -7890
                                    <br> 1 -234 -456 -7890</p>
                            </li>
                            <li><i class="flaticon-envelope"></i><a href="#">info@Jbdesks.com </a>
                                <br>
                                <a href="#">support@Jbdesks.com</a>
                            </li>

                        </ul>

                        <ul class="icon_list_news jb_cover">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>features</h5>
                        <ul class="nav-widget">
                            <li><a href="#"><i class="fa fa-square"></i>Job Management & Billing
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Time & Materials Tracking
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Standards Compliance
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Real Time GPS Tracking
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>Client Portal
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Powerful Workflow</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>browse</h5>
                        <ul class="nav-widget">

                            <li><a href="#"><i class="fa fa-square"></i>Freelancers by Category</a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in USA </a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in UK</a></li>

                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in Canada</a></li>
                            <li><a href="#"><i class="fa fa-square"></i> Freelancers in india</a></li>
                            <li><a href="#"><i class="fa fa-square"></i> find jobs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>app & integration</h5>
                        <ul class="nav-widget">
                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft1.png" alt="img">Xero
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft2.png" alt="img">Reckon
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft3.png" alt="img">Flexidocs
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft4.png" alt="img">Microsoft Exchange</a>
                            </li>
                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft5.png" alt="img"> Mailchimp
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="/front/dashboard/images/ft6.png" alt="img"> MYOB
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="copyright_left"><i class="fa fa-copyright"></i> 2019 <a href="#"> JB desks. </a> All Rights
                    Reserved.
                </div>

                <div class="clearfix"></div>
            </div>
            <!--/.row-->
        </div>

    <script>
        editor.document.designMode = "On";

        function transform(option, argument) {
            editor.document.execCommand(option, false, argument);
        }
    </script>

    @endsection


