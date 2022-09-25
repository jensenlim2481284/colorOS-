@extends("pages.dashboard.layout.index")

@section('head')

<title> Explore </title>
<link href="/css/page/dashboard/explore.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet" />

@endsection

@section('content')
<div class='row'>
    <div class='col-sm-12'>
        <div class='explore'>
            <h1> Share. Connect. Grow.</h1>
            <p> Let's search for the API you interested to working with </p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class='ti-search'></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search ... " aria-label="Username" aria-describedby="basic-addon1">
            </div>

        </div>
    </div>

    <div class='col-sm-12'>
        <div class=' api-parent'>
            <div class='api-tt'>
                <img src='/img/picture/l1.JPG' />
                <h2> The Smart Lighting </h2>
            </div>
            <div class='api-child'>
                <div class='row'>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Light Log </h4>
                            <p> Return smart light API trigger log data </p>
                            <span> FREE </span>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Light Usage </h4>
                            <p> Return smart light usage data </p>
                            <span> FREE </span>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Light Action </h4>
                            <p> Turning on and off smart light with this API. </p>
                            <span class='a'> $10 </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class='col-sm-12'>
        <div class=' api-parent'>
            <div class='api-tt'>
                <img src='/img/picture/l3.JPG' />
                <h2> Smart Digital Lock </h2>
            </div>
            <div class='api-child'>
                <div class='row'>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Door Log </h4>
                            <p> Return smart door API trigger log data </p>
                            <span> FREE </span>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Door Usage </h4>
                            <p> Return smart door usage data </p>
                            <span> FREE </span>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class='item'>
                            <h4> Smart Door Action </h4>
                            <p> Lock or unlock smart door with this API. </p>
                            <span> FREE </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@stop