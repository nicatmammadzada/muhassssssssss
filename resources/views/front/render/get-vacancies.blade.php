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
