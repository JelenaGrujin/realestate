@extends('layouts.base_navbar')
@section('table')
    <table class="table">
        <thead>
        <tr>
            <th colspan="3" scope="col" class="text-center">{{$table}}</th>
        </tr>

        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr class="text-center">
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <form action="{{ route($table.'.destroy', $item->id)}}" method="POST">
                @method('DELETE')
                @csrf
            <td>
                <button class="btn bnt-sm btn-danger">X</button></td>
            </form>
        </tr>
        @endforeach
        <tr>
            <form method="post" action="{{route($table.'.store')}}">
                @csrf
            <th scope="row">add:</th>
            <td ><input class="form-control form-control-sm" type="text" name="name" ></td>
            <td><input class="btn-sm btn-primary" type="submit"></td>
            </form>
        </tr>
        </tbody>
    </table>
@endsection
