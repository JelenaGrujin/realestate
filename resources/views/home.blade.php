@extends('layouts.app')
@section('navbar')
    @extends('layouts.navbar')
@endsection
@section('content')
<div class="container">
    <div class="row wrapper bg-faded ml-3 mr-3">
        <div class="col-3 bg-white mr-1">
            <div class="text-dark border-bottom pt-2 pb-2"><strong>Calendar of activities</strong></div>
            <div class="row border-bottom">
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Activity</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">ID</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Time</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Reminder:</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"><a href="#" class=" badge-pill badge-primary"></a></div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
            </div>
        </div>
        <div class="col bg-white mr-1">
            <div class="text-dark bg-muted border-bottom pt-2 pb-2"><strong>Activities</strong></div>
            <div class="row border-bottom">
                <div class="col-1">
                    <div class="small text-muted pt-2 pb-2">ID</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Type</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Location</div>
                </div>
                <div class="col-2">
                    <div class="small text-muted pt-2 pb-2">Activiti</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Price</div>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <div class="small text-muted pt-2 pb-2"><a href="#" class=" badge-pill badge-danger"></a></div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
                <div class="col-2">
                    <div class="small text-danger pt-2 pb-2"></div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
            </div>
        </div>
        <div class="col-3 bg-white">
            <div class="text-dark bg-muted border-bottom pt-2 pb-2"><strong>Birthdays</strong></div>
            <div class="row border-bottom">
                <div class="col-2">
                    <div class="small text-muted pt-2 pb-2">ID</div>
                </div>
                <div class="col-6">
                    <div class="small text-muted pt-2 pb-2">Name</div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2">Date</div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="small pt-2 pb-2"><a href="#" class=" badge-pill badge-info"></a></div>
                </div>
                <div class="col-6">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
                <div class="col">
                    <div class="small text-muted pt-2 pb-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
