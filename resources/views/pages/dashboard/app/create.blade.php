@extends("pages.dashboard.layout.empty")

@section('head')

<title> Create App </title>
<link href="/css/page/dashboard/app.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet" />

@endsection

@section('content')

<div class='container mt-5'>
    <a class="info-back-btn" href='/'><button class='btn circle-btn back-btn'> <i class='ti-arrow-left'> </i> <span>Back</span></button></a>

    <div class='row info-row'>
        <div class='col-12 mb-5'>
            <div class='form-section'>
                <h1> Create App </h1>
                <p class='title-desc mb-5'> Add information to identify and describe your app</p>
            </div>
            <h6 class='mb-2'> App Information </h6>
            <div class='form-section custom-form '>
                <div class="form-group mb-5 store-name-section">
                    <div class='row'>
                        <div class='col-12 mb-3'>
                            <p>Project Icon</p>
                            <form id="file-upload-form" class="uploader">
                                <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                                <label for="file-upload" id="file-drag">
                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div>Select a file or drag here</div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                    </div>
                                    <div id="response" class="hidden">
                                        <div id="messages"></div>
                                        <progress class="progress" id="file-progress" value="0">
                                            <span>0</span>%
                                        </progress>
                                    </div>
                                </label>
                            </form>
                        </div>
                        <div class='col-12'>
                            <p>Name</p>
                            <input class='form-control' type='text' />
                        </div>
                        <div class='col-12 mt-3'>
                            <p>Description</p>
                            <input class='form-control' type='text' />
                        </div>
                    </div>
                </div>

            </div>
            <div class='text-right mt-4'>
                <a href='/'><button class='btn btn-primary'> Create </button></a>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/js/page/dashboard/app.js{{ config('app.link_version') }}"></script>

@stop