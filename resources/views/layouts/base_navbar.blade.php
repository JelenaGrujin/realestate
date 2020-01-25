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
                                    <a class="{{ Request::path()==='object_type'?'text-primary':''}}" href="object_type">Object types</a>
                                </li>
                                <li>
                                    <a href="#">Equipments</a>
                                </li>
                                <li>
                                    <a href="#">Structure</a>
                                </li>
                                <li>
                                    <a href="#">Heating</a>
                                </li>
                                <li>
                                    <a href="#">Carpentry</a>
                                </li>
                                <li>
                                    <a href="#">Kitchens</a>
                                </li>
                                <li>
                                    <a href="#">Bathrooms</a>
                                </li>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Garages</a>
                                </li>
                                <li>
                                    <a href="#">Providers</a>
                                </li>
                                <li>
                                    <a href="#">Terraces</a>
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
