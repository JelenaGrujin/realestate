@extends('layouts.search')
@section('table')
    <table class="table border table-sm table-hover table-light small table table-striped mt-2">
        <thead>
        <tr>
            <th class="text-muted" scope="col">Check</th>
            <th class="text-muted" scope="col">View</th>
            <th class="text-muted" scope="col">Updated</th>
            <th class="text-muted" scope="col">Price</th>
            <th class="text-muted" scope="col">Owners</th>
            <th class="text-muted" scope="col">Photos</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach ($realestates ?? '' as $realestate)
        <tr>
            <td ><input type="checkbox" value="{{$realestate->id}}"></td>
            <td ><a href="#" class="badge-pill badge-primary">{{$realestate->id}}</a></td>
            <td class="text-dark">{{$realestate->updated_at}}</td>
            <td class="text-dark">{{$realestate->price}}</td>
            <td class="text-dark"><a class="badge-pill badge-primary" href="">{{$realestate->owner_id}}</a></td>
            <td class="text-dark"><a class="badge-pill badge-primary" href="#" >photo</a></td>
        </tr>
        <tr>
            <td class="text-dark" colspan="7">note for product ID {{$realestate->id}} : {{$realestate->note}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
