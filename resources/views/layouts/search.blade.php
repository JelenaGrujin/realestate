@extends('layouts.app')
@section('navbar')
    @extends('layouts.navbar')
@endsection
@section('content')
    <div class="container">
        <div class="row wrapper bg-faded ml-3 mr-3">
            <div class="col-2">
                <input class="form-control" id="myInput" type="text" placeholder="Key word...">
            </div>
            <div class="col">
                <a class="badge-pill badge-danger" href="#" >*</a>
            </div>

                @yield('table')

            <script>
                $(document).ready(function() {
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").each(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
        </div>
    </div>
@endsection
