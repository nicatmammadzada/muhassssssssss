@extends('front.layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/front/dashboard/css/style.css?"/>
@endsection
@section('content')

    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Applications</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Applications</li>
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
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="emp_dashboard_sidebar jb_cover">
                        <div class="emp_web_profile jb_cover">
                            <img src="/front/images/web.png" alt="post_img" />
                            <h4>Webstrot Technology</h4>
                            <p>@Webstrot</p>
                            <div class="skills jb_cover">
                                <div class="skill-item jb_cover">
                                    <h6>profile<span>70%</span></h6>
                                    <div class="skills-progress"><span data-value="70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="emp_follow_link jb_cover">
                            <ul class="feedlist">
                                <li><a href="comp_employer_dashboard.html"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                                <li>
                                    <a href="comp_employer_edit_profile.html"> <i class="fas fa-edit"></i>edit profile
                                    </a>
                                </li>
                                <li><a href="comp_company_page.html"><i class="fas fa-file"></i>company page </a></li>
                                <li><a href="comp_employer_manage_jobs.html"><i class="fas fa-suitcase"></i>manage jobs</a></li>
                                <li><a href="comp_applications.html" class="link_active"><i class="fas fa-mobile"></i>applications</a></li>
                                <li><a href="comp_post_new_job.html"><i class="fas fa-user-plus"></i>post new job</a></li>
                                <li><a href="message.html"><i class="fas fa-envelope"></i>message</a></li>
                                <li><a href="pricing_plans.html"><i class="fas fa-tag"></i>pricing plans</a></li>
                            </ul>
                            <ul class="feedlist logout_link jb_cover">
                                <li><a href="#"><i class="fas fa-power-off"></i> log out  </a></li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i>delete profile
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="modal fade delete_popup" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-trash-alt"></i> delete account</h1>
                                            <p>Are you sure! You want to delete your profile. This
                                                <br> can't be undone!</p>

                                            <div class="delete_jb_form">

                                                <input type="password" name="password" placeholder="Enter Password">
                                            </div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" class="" data-dismiss="modal">cancel</a>
                                            </div>
                                            <div class="login_remember_box jb_cover">
                                                <label class="control control--checkbox">You accepts our <a href="#">Terms and Conditions </a> and <a href="#">Privacy Policy</a>
                                                    <input type="checkbox">
                                                    <span class="control__indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_main_overflow jb_cover">
                                <div class="latest_job_overlow jb_cover">
                                    <div class="manage_jobs_wrapper jb_cover">
                                        <div class="job_list mange_list applications_recent">

                                            <h6>recent applications</h6>

                                        </div>
                                    </div>
                                @foreach($items as $item)
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list recent_app_1">
                                            <div class="recent_img">
                                                <img src="/uploads/image/{{$item->photo ?? 'default.png'}}" alt="post_img">
                                            </div>
                                            <div class="recent_cntnt">
                                                <h6><a href="#">{{$item->name}}</a></h6>
                                                <ul>

                                                    <li><i class="fas fa-suitcase"></i>&nbsp; web designer</li>
                                                    <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="job_list_next recent_app_1">
                                            <div class="header_btn download_btn_wrapper jb_cover">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-file-download"></i>download info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="fas fa-envelope"></i>send</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                                    <div class="blog_pagination_section jb_cover">
                                        <ul>
                                            <li>
                                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                            </li>
                                            <li><a href="#">1</a>
                                            </li>
                                            <li class="third_pagger"><a href="#">2</a>
                                            </li>
                                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                            </li>
                                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                            </li>
                                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                            </li>

                                            <li>
                                                <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                            </li>
                                        </ul>
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

    @endsection
