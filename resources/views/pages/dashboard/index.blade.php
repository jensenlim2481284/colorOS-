@extends("pages.dashboard.layout.index")

@section('head')

<title> Dashboard  </title>
<link href="/css/page/dashboard/index.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/page/dashboard/index.js{{ config('app.link_version') }}"></script>

@endsection

@section('content')

<div class='row'>
    <div class='col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7'>
        <div class='ref-box'>
            <h1>Getting Started With OPPO IoT </h1>
            <p>Let's integrate your IoT app into OPPO IoT which accessible to over 200 million customers.  </p>
            <a href='/app/create'><button type='button' class='btn btn-default'  data-toggle="modal" data-target="#ticketModal"> Create App </button> </a>
            <a href='/documentation'><button class='btn btn-primary under-development' data-title='Onboarding Checklist' data-desc='This feature will guide merchants how to set up their online store step by step.'> Documentation </button></a>
        </div>
        <div id="overviewChart">
            <h2> Manage App </h2>
            <div class='app-list row'>
                @if(session('created'))
                    <div class='col-sm-4'>
                        <div class='item'>
                            <div class='m'>
                                <img src='/img/picture/l2.JPG'/>
                            </div>
                            <h3> Smart Light </h3>
                            <p> Some description  </p>
                            <a href='/app/manage/8BYw10056708a'><button class='btn btn-outline'> Manage </button></a>
                        </div>
                    </div>
                @endif
                <div class='col-sm-4'>
                    <div class='item'>
                        <div class='m'>
                            <img src='/img/picture/l1.JPG'/>
                        </div>
                        <h3> Smart Door </h3>
                        <p> Electromechanical lock which is designed to perform locking and unlocking operations on a door   </p>
                        <button class='btn btn-outline'> Manage </button>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='item'>
                        <div class='m'>
                            <img src='/img/picture/l3.JPG'/>
                        </div>
                        <h3> Smart Water Heater </h3>
                        <p> Smart water heaters establish a wireless connection to your device, typically using Bluetooth or Wi-Fi.    </p>
                        <button class='btn btn-outline'> Manage </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class='col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1'></div>
    <div class='col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4'>
        <div class="dashboard-view-list">
            <div class='dashboard-list active'>
                <div class='icon-box'>
                    <i class='ti ti-heart'></i>
                </div>
                <div class='list-content referrar'>
                    <p> Published App </p>
                    <h2> 3 </h2> 
                </div>
            </div>

            <div class='dashboard-list'>
                <div class='icon-box'>
                    <i class='ti-ruler-pencil'></i>
                </div>
                <div class='list-content'>
                    <p> Draft </p>
                    <h2> 1 </h2> 
                </div>
            </div>
            <div class='dashboard-list'>
                <div class='icon-box'>
                    <i class='ti ti-alert'></i>
                </div>
                <div class='list-content'>
                    <p> Rejected App </p>
                    <h2> 0 </h2> 
                </div>
            </div>
        </div>
        <div class='activity-list'>
            <p class='list-title'>Recent Activity </p>
            <div class='list-item'>
                <div class='item-content'>
                    <h2> Create App </h2>
                    <p> Smart Light </p>
                </div>
                <div class='item-balance'>
                    <span class='badge badge-success'>25/9/2022</span>
                </div>
            </div>
            <div class='list-item'>
                <div class='item-content'>
                    <h2> Publish App </h2>
                    <p> Smart Door </p>
                </div>
                <div class='item-balance'>
                    <span class='badge badge-success'>24/9/2022</span>
                </div>
            </div>
            <div class='list-item'>
                <div class='item-content'>
                    <h2> Delete App </h2>
                    <p> Smart Water Heater </p>
                </div>
                <div class='item-balance'>
                    <span class='badge badge-success'>22/9/2022</span>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
