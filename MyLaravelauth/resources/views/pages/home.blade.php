@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>Cars:</h1>
                <ul>
                    @foreach($cars as $car)
                        <li class="border">
                            {{ $car -> name }}
                            -
                            {{ $car -> model }}
                            kW:
                            {{ $car -> kw }}
                            <br>
                            {{ $car -> brand -> name }}
                            ({{ $car -> brand -> nationality }})
                            <br>
                            Pilots:
                            <ul>
                                @foreach($car -> pilots as $pilot)
                                    <li>
                                        <a href="{{ route('pilot', $pilot -> id) }}">
                                            {{ $pilot -> firstname }}
                                            {{ $pilot -> lastname }}
                                        </a>
                                        {{ $pilot -> nationality }}
                                        <br>
                                        {{ $pilot -> date_of_birth }}
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
