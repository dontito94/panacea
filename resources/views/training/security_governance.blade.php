@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])

@section('content')
    {{--<section class="inner-banner" style="background-color: #00A8FF">--}}
        {{--<div class="container">--}}
            {{--<div class="title pull-left">--}}
                {{--<h2>Security Governance</h2>--}}
            {{--</div><!-- /.title pull-left -->--}}
        {{--</div><!-- /.contianer -->--}}
    {{--</section><!-- /.inner-banner -->--}}
    <section class="service-single-page sec-pad">
        <div class="container">
            <div class="service-single-content">
                <h3>Security Governance</h3>
                <br />
                <p>Every Organisation has top officials be it Board of Directors or Executive Management. These officials develop organisation targets and strategies to meet those targets. That means, these officials are the most top decision makers of the organisation. Likewise, Information Security Strategy must align with and support organisation’s business objectives. However, most boards and/or executive management do not understand the importance of Information Security Management, therefore they consider it as a cost rather than an investment. With such kind of an understanding, we are here to hook up the minds of most top officials with the knowledge of Information security as one of the phenomenon towards successful governance.</p>
                <br />
                <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                <br />
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                <br />
                <h3>Service Advantage</h3>
                <br />
                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                <br />
                <br />
                <div class="row service-features">
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Mastercard"></i>
                            <h3>SEQURE PAYMENT</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-CD"></i>
                            <h3>BEST DATA SECURITY</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Users"></i>
                            <h3>QUALIFIED GUARDST</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.service-single-content -->
        </div><!-- /.container -->
    </section><!-- /.service-single-page -->
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush


