@extends('front.layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/front/css/style.css"/>
@endsection
@section('content')

    <div class="page_title_section" >

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>job listing</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="#"> Home </a>&nbsp; / &nbsp;</li>
                                <li>is elanlari</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        @include('back.layouts.include.alert-messages')
        <div class="container" id="app">




            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">
                    {{--                    <div class="job_filter_category_sidebar jb_cover">--}}
                    {{--                        <div class="job_filter_sidebar_heading jb_cover">--}}
                    {{--                            <h1>jobs by category</h1>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="category_jobbox jb_cover">--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c1" onchange="calc(this)" name="cb">--}}
                    {{--                                <label for="c1">graphic designer<span> (155)</span></label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c2" name="cb">--}}
                    {{--                                <label for="c2">--}}
                    {{--                                    Engineering Jobs <span> (514)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c3" name="cb">--}}
                    {{--                                <label for="c3">Mainframe Jobs <span> (554)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c4" name="cb">--}}
                    {{--                                <label for="c4">Legal Jobs <span> (457)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c5" name="cb">--}}
                    {{--                                <label for="c5">IT Jobs <span> (254)</span> </label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c6" name="cb">--}}
                    {{--                                <label for="c6">PSU Jobs <span> (1054)</span> </label>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="job_field">--}}
                    {{--                                <input type="checkbox" id="c7" name="cb">--}}
                    {{--                                <label for="c7">government Jobs <span> (1284)</span> </label>--}}
                    {{--                            </p>--}}
                    {{--                            <div class="seeMore"><a href="#">view all categories</a></div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}

                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="/front/images//logo2.png" alt="logo"/>
                            <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-233" class="dropify"
                                       data-height="90"/><span class="post_photo">add resume</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                            <select onchange="getType(this.value)">
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name ?? ''}}</option>
                                @endforeach
                            </select>

                            <div class="list-grid">

                            </div>
                            <div class="showpro">
                                <p>You're Watching 01 to 20</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">

                            <div>
                                <div class="row" id="vacanciess">
                                    @if($items->count()>0)
                                        @foreach($items as $item)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="job_listing_left_fullwidth jb_cover">
                                                    <div class="row">

                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                            <div class="jp_job_post_side_img">
                                                                {{--                                                                <img src="/front/images//lt1.png" alt="post_img"/>--}}
                                                                {{--                                                                <br>--}}
                                                                <span>{{$item->company}}</span>
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4><a href="#">{{$item->role}}</a></h4>

                                                                <ul>
                                                                    <li>
                                                                        <i class="flaticon-cash"></i>&nbsp; {{$item->salary_min}}
                                                                        - {{$item->salary_max}}
                                                                        AZN
                                                                    </li>
                                                                    <li><i class="flaticon-location-pointer"></i>&nbsp;
                                                                        {{$item->city}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li>
                                                                        <div class="job_adds_right">
                                                                            <a href="#!"><i
                                                                                    class="far fa-heart"></i></a>
                                                                        </div>
                                                                    </li>
                                                                    <li><a href="job_single.html">{{$item->type->name }}</a></li>
                                                                    <li onclick="jobApply({{$item->id}})"><a href="#"
                                                                                                             data-toggle="modal"
                                                                                                             data-target="#myModal1">apply</a>


                                                                    </li>

                                                                </ul>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    {{--/Apply Modal/--}}
                                    <form  @submit="checkForm" action="{{route('job.apply')}}" method="post"
                                          novalidate="true">
                                        @csrf


                                        <div class="modal fade apply_job_popup" id="myModal1"
                                             role="dialog">


                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;
                                                    </button>
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>


                                                                <div
                                                                    class="search_alert_box jb_cover">

                                                                    <p v-if="errors.length">
                                                                        <b>Please correct the following error(s):</b>
                                                                    <ul>
                                                                        <li class="alert-danger"
                                                                            v-for="error in errors">@{{ error }}
                                                                        </li>
                                                                    </ul>
                                                                    </p>

                                                                    <div class="apply_job_form">

                                                                        <input class="" v-model="name" type="text"
                                                                               name="name"
                                                                               placeholder="full name">

                                                                        <input type="hidden" id="job-id"
                                                                               name="job_id" value="0"
                                                                        >

                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input v-model="email" type="email"
                                                                               name="email"
                                                                               placeholder="Enter Your Email">

                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                                            <textarea
                                                                                                class="form-control"
                                                                                                name="message"
                                                                                                placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div
                                                                        class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file" ref="file" name="file"
                                                                                   id="input-file-now-custom-1"
                                                                                   class="dropify"
                                                                                   data-height="90"/><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file">
                                                                            microsoft word or pdf
                                                                            file only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#" onclick="submit()">apply now</a>
                                                                    <input type="submit">
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
                            <div class="blog_pagination_section jb_cover">

                                {{$items->links()}}

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--job listing filter  wrapper end-->
    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot')
    <script src="/front/js/vue.min.js"></script>
    <script>
        function jobApply(id) {

            // document.getElementById("app").submit();
            document.getElementById('job-id').value = id;
        }
    </script>

    <script>
        function calc(ev) {
            if (document.getElementById('c1').checked) {
                alert('checked')
            } else {
                alert('nooo')
            }
        }
    </script>


    <script>
        const app = new Vue({
            el: '#app',
            data: {
                jobs:['45','45632'] ,

                errors: [],
                msg: [],

                name: 'name',
                id: 0,
                // surname:'',
                // university:'',
                email: null,
                // phone:null,
                // bdate:'29-09-1997',
                // styleObject: {
                //     color: 'red',
                //     fontSize: '13px',
                //     background: 'green'
                // }  ,

            },
            methods: {
                checkForm: function (e) {
                    this.errors = [];
                    if (!this.name) this.errors.push("Name required.");
                    // if(!this.phone) {
                    //     this.errors.push("Phone required.");
                    // }

                    if (!this.email) {
                        this.errors.push("Email required.");
                        this.msg['email'] = 'Email required.';
                    } else if (!this.validEmail(this.email)) {
                        this.errors.push("Valid email required.");
                        this.msg['email'] = 'Valid email required.';
                    }

                    const file = this.$refs.file.files[0];

                    if (!file) {
                        e.preventDefault();
                        this.errors.push("file required.");
                    }

                    if (file.size > 6000 * 6000) {
                        e.preventDefault();
                        this.errors.push(" max file size 5 mb.");
                    }


                    if (!this.errors.length) return true;
                    e.preventDefault();
                },
                validEmail: function (email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                },


                // acceptNumber() {
                //     var x = this.phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                //     this.phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                // }

                editModal: function (id) {

                    // value = event.target.value;

                    this.id = id;
                    // console.log(value)
                }


            }
        })
    </script>
<script>
    function getType(id) {
        var url = "/is-elanlari/type";

        $.ajax({
            url: url,
            data: {"_token": "{{ csrf_token() }}",id:id},
            type: 'GET',
            success: function (response) {
                if (response) {

                    document.getElementById('vacanciess').innerHTML=response;




                }


            }
        });
    }
</script>

@endsection
