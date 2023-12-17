@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des restaurants</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            propriétaire
                                        </th>
                                        <th>
                                            Entreprise
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($restaurants as $item)
                                        <tr>
                                            <td>
                                                {{ $item->user->name }}
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                @if ($item->status == 0)
                                                    <div class=" bg-danger text-white p-2 text-center">
                                                        non activée
                                                    </div>
                                                @else
                                                    <div class="bg-success text-white p-2 text-center">activée</div>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <a href="{{ route("admin.restaurants.unactivate",["id" => $item->id]) }}" class="bg-danger text-white p-2">desactiver</a>
                                                @else
                                                <a href="{{ route("admin.restaurants.activate",["id" => $item->id]) }}" class="bg-success text-white p-2">activer</a>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
