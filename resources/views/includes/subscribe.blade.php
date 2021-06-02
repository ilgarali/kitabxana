<div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container">
        <div class="newsletter-wrap">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-12 md-mb-30">
                    <div class="content-part">
                        <div class="sec-title">
                            <div class="title-icon md-mb-15">
                                <!-- <i class="fas fa-newspaper" ></i> -->
                                <i class="far fa-envelope-open" style="color:#511D59; margin-right: 20px; font-size: 50px"></i>
                            </div>
                            <h2 class="title mb-0 white-color">{{$homedata->getTranslatedAttribute('follow_us')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="newsletter-form">
                        <input type="email" name="email" placeholder="{{$homedata->getTranslatedAttribute('follow_placeholder')}}" required="">
                        <button type="submit">{{$homedata->getTranslatedAttribute('follow_button')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>