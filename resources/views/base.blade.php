@extends('layouts.base_navbar')
@section('table')
    <table class="table">
        <thead>
        <tr>
            <th colspan="3" scope="col" class="text-center"></th>
        </tr>

        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td><a href="#" class="btn-sm btn-danger">X</a></td>
        </tr>
        @endforeach
        <tr>
            <form method="post" action="{{route('object_type.store')}}">
                @csrf
            <th scope="row">add:</th>
            <td ><input class="form-control" type="text" name="name" ></td>
            <td><input class="btn-sm btn-primary" type="submit"></td>
            </form>
        </tr>
        </tbody>
    </table>
@endsection
