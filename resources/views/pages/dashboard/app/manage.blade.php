@extends("pages.dashboard.layout.empty")

@section('head')

<title> Manage App </title>
<link href="/css/page/dashboard/manage.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet" />

@endsection

@section('content')

<div class='container mt-5'>

    <div class='top-btn'>
        <a class="info-back-btn" href='/'><button class='btn circle-btn back-btn'> <i class='ti-arrow-left'> </i> <span>Back</span></button></a>
        <div>

            <a href='/img/picture/dev.png' target="_blank"><button class='btn btn-default'> <i class='ti-ruler-alt-2'></i> App builder</button></a>
            <button class='btn btn-primary'> <i class='ti-share'></i> Publish </button>
        </div>
    </div>
    <div class='desc'>
        <img src="/img/picture/l2.JPG" />
        <div>
            <h1> Smart Light</h1>
            <p> Some description</p>
        </div>
    </div>
    <div class="row">
        <div class="col-3 pr-5">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class='ti-layout-width-full'></i> Basic Information</button>
                <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class='ti-control-record'></i>Voice Command</button>
                <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class='ti-layout-slider'></i>Open API</button>
            </div>
        </div>
        <div class="col-9 mm">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class='row info-row'>
                        <div class='col-12 mb-5'>
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
                                            <input class='form-control' type='text' value='Smart Light' />
                                        </div>
                                        <div class='col-12 mt-3'>
                                            <p>Description</p>
                                            <input class='form-control' type='text' value='Some description' />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class='text-right mt-4'>
                                <a href='#'><button class='btn btn-danger'> Delete </button></a>
                                <a href='#'><button class='btn btn-primary'> Update </button></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <button class='btn circle-btn secondary-circle-btn ' data-toggle="modal" data-target="#voiceModal"> <i class='ti-plus'> </i>
                        <span>Add</span>
                    </button>
                    <div class='data-item row'>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Open Light </h4>
                                <p> Turn on the smart light </p>
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Off Light </h4>
                                <p> Turn off the smart light</p>
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Party Time </h4>
                                <p> Trigger light on and off at random rhythms. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <button class='btn circle-btn secondary-circle-btn' data-toggle="modal" data-target="#openDataModal"> <i class='ti-plus'> </i>
                        <span>Add</span>
                    </button>
                    <div class='data-item row'>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Smart Light Log </h4>
                                <p> Return smart light trigger log data </p>
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Smart Light Usage </h4>
                                <p> Return smart light usage data </p>
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='item'>
                                <h4> Smart Light Action </h4>
                                <p> Turning on and off smart light with this API. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>


<div id="voiceModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Create Voice Command </h4>
            </div>
            <div class="modal-body row">
                <div class='col-sm-12 form-group'>
                    <p>Command </p>
                    <input type="text" class="form-control" name="name" placeholder="Open Light">
                </div>
                <div class='col-sm-12 form-group'>
                    <p>Description </p>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class='col-sm-12 form-group'>
                    <p>API Call </p>
                    <input type="text" class="form-control" name="name" placeholder='https://www.smartlight.io/api/{deviceID}/triggerLight'>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success submit-btn' data-dismiss="modal"> Create </button>
            </div>
        </div>
    </div>
</div>

<div id="openDataModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Create Open Data </h4>
            </div>
            <div class="modal-body row">
                <div class='col-sm-12 form-group'>
                    <p>Title </p>
                    <input type="text" class="form-control" name="name" placeholder="Smart Light Activity">
                </div>
                <div class='col-sm-12 form-group'>
                    <p>Description </p>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class='col-sm-12 form-group'>
                    <p>Cost ($USD)</p>
                    <input type="text" class="form-control" name="name" placeholder="10">
                </div>
                <div class='col-sm-12 form-group'>
                    <p>API </p>
                    <input type="text" class="form-control" name="name" placeholder='https://www.smartlight.io/api/{deviceID}/getPublicData'>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success submit-btn' data-dismiss="modal"> Create </button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="/js/page/dashboard/app.js{{ config('app.link_version') }}"></script>

@stop