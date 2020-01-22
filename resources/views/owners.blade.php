@extends('layouts.search')
@section('table')
    <table class="table border table-sm table-hover table-light small table table-striped mt-2">
        <thead>
        <tr class="bg-light">
            <th class="text-muted" scope="col">View</th>
            <th class="text-muted" scope="col">ID</th>
            <th class="text-muted" scope="col">Name</th>
            <th class="text-muted" scope="col">Company</th>
            <th class="text-muted" scope="col">Address</th>
            <th class="text-muted" scope="col">e-mail</th>
            <th class="text-muted" scope="col">Phone</th>
            <th class="text-muted" scope="col">Doc</th>
        </tr>
        </thead>
        <tbody id="myTable">
        <tr >
            <td class=""><a class="text-primary" href="#">view</a ></td>
            <td ><a href="#" class="badge-pill badge-primary"></a></td>
            <td class="text-dark"></td>
            <td class="text-dark"></td>
            <td class="text-dark"></td>
            <td class="text-dark"></td>
            <td class="text-dark"></td>
            <td hidden ></td>
            <td ><a href="#" class="badge-pill badge-primary">Doc</a></td>
        </tr>
        </tbody>
    </table>
@endsection
