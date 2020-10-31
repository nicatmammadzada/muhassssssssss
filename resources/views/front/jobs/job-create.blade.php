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
                                                <input type="text" name="name" placeholder="seher">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Seher</label>
                                                <input type="text" name="name" placeholder="seher">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>Yas</label>
                                                <input type="text" name="name" placeholder="yas araligi">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                            <div class="contect_form3">
                                                <label>tehsil</label>
                                                <input type="text" name="name" placeholder="tehsil">
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
                                                <input type="text" name="name" placeholder="elaqedar wexs">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>wirket</label>
                                                <input type="text" name="name" placeholder="elaqedar wexs">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>is tecrubesi</label>
                                                <input type="text" name="name" placeholder="is tecrubesi">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>maas araligi</label>
                                                <input type="text" name="name" placeholder="is tecrubesi">
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
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>telebler</h1>
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


        <script>
            editor.document.designMode = "On";

            function transform(option, argument) {
                editor.document.execCommand(option, false, argument);
            }
        </script>

@endsection


