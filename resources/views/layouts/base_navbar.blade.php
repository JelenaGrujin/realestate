@extends('layouts.app')
@section('navbar')
    @extends('layouts.navbar')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <nav>
                    <ul class="list-unstyled components">
                        <p>Base tables:</p>
                        <li class="p-2">
                            <a href="#realestateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Realestates:</a>
                            <ul class="collapse list-unstyled" id="realestateSubmenu">
                                <li>
                                    <a class="{{ Request::path()==='ObjectType'?'text-primary':''}}" href="ObjectType">Object types</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Equipment'?'text-primary':''}}" href="Equipment">Equipments</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Disposition'?'text-primary':''}}" href="Disposition">Disposition</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Heating'?'text-primary':''}}" href="Heating">Heating</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Carpentry'?'text-primary':''}}" href="Carpentry">Carpentry</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Kitchen'?'text-primary':''}}" href="Kitchen">Kitchens</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Bathroom'?'text-primary':''}}" href="Bathroom">Bathrooms</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Accessories'?'text-primary':''}}" href="Accessories">Accessories</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Garage'?'text-primary':''}}" href="Garage">Garages</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Provider'?'text-primary':''}}" href="Provider">Providers</a>
                                </li>
                                <li>
                                    <a class="{{Request::path()==='Terrace'?'text-primary':''}}" href="Terrace">Terraces</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-2">
                            <a href="#locationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Locations:</a>
                            <ul class="collapse list-unstyled" id="locationSubmenu">
                                <li>
                                    <a href="#">City</a>
                                </li>
                                <li>
                                    <a href="#">District</a>
                                </li>
                                <li>
                                    <a href="#">Slug</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-2">
                            <a href="#ownerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Owners:</a>
                            <ul class="collapse list-unstyled" id="ownerSubmenu">
                                <li></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col">
                @yield('table')
            </div>
        </div>
    </div>
@endsection
