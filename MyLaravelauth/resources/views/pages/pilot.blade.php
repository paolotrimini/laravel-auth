@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h2>
                    {{ $pilot -> firstname }}
                    {{ $pilot -> lastname }}
                </h2>
                <ul>
                    @foreach($pilot -> cars as $car)
                        <li class="border">
                            {{ $car -> name }}
                            -
                            {{ $car -> model }}
                            :
                            {{ $car -> kw }}kW
                            <br>
                            {{ $car -> brand -> name }}
                            {{ $car -> brand -> nationality }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
