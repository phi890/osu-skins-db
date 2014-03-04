@extends('master')
@section('content')
<div class="container">
    <h1>hi there</h1>
    <div class="row">
        <div class="col-sm-8 col-md-3">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="...">
                <div class="caption">
                    <h3>Nightcore skin</h3>
                    <p class="text-center"><b class="taiko"></b><b class="osu"></b></p>
                    <p>...</p>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                    <p>
                        <a href="#" class="btn btn-primary" style="width:100%;" role="button">
                            <b class="glyphicon glyphicon-search pull-left"></b>
                        View Skin</a>
                    </p>
                    <p><a href="#" class="btn btn-danger" style="width:100%;" role="button">
                            <b class="glyphicon glyphicon-save pull-left"></b>
                            Download</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop