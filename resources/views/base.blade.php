@extends('layouts.base_navbar')
@section('table')
    <table class="table">
        <thead>
        <tr>
            <th colspan="4" scope="col" class="text-center">title</th>
        </tr>

        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><a href="#" class="btn-sm btn-danger">X</a></td>
        </tr>
        <tr>
            <th scope="row">add:</th>
            <td colspan="2"><input class="form-control" type="text" name="" id=""></td>
            <td><input class="btn-sm btn-primary" type="submit"></td>
        </tr>
        </tbody>
    </table>
@endsection
