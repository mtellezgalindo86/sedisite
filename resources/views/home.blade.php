@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Mensaje</th>
                            <th>Estatus</th>
                            <th>¿Contactado?</th>
                        </tr>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact["name"]}}</td>
                                <td>{{$contact["email"]}}</td>
                                <td>{{$contact["phone"]}}</td>
                                <td>{{$contact["comment"]}}</td>
                                @php
                                    if($contact["read"] == 0){
                                        $status = "Pendiente";
                                    }
                                @endphp
                                <td>{{$status}}</td>
                                <td><a href="{{route("update-contact", $contact["id"])}}">Si</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
