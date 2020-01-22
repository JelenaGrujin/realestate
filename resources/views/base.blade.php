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
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
@endsection
