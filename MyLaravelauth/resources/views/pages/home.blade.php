@extends('layouts.main-layout')

@section('content')
    <div class="container-fluid text-center text-light">
        <div class="row">
            <div class="col-12">
                <h1>Cars:</h1>
                <ul>
                    @foreach($cars as $car)
                        <li class="border">
                            {{ $car -> model }}
                            ({{ $car -> name }})
                            -
                            {{ $car -> brand -> name }}
                            <br>
                            Pilots:
                            <ul>
                                @foreach($car -> pilots as $pilot)
                                    <li>
                                        {{ $pilot -> firstname}}
                                        {{ $pilot -> lastname}}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
