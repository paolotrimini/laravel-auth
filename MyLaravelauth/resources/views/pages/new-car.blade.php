@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>NEW CAR:</h1>
                <form action="{{ route('store-car') }}" method="POST">

                    @csrf
                    @method('POST')

                    {{-- Name --}}
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    {{-- Model --}}
                    <div class="form-group row">
                        <label for="model" class="col-md-4 col-form-label text-md-right">Model</label>
                        <div class="col-md-6">
                            <input id="model" type="text" class="form-control" name="model" required>
                        </div>
                    </div>
                    {{-- kW --}}
                    <div class="form-group row">
                        <label for="kw" class="col-md-4 col-form-label text-md-right">kW</label>
                        <div class="col-md-6">
                            <input id="kw" type="number" class="form-control" name="kw" required>
                        </div>
                    </div>
                    {{-- brand --}}
                    <div class="form-group row">
                        <label for="brand_id" class="col-md-4 col-form-label text-md-right">Brand</label>
                        <div class="col-md-6">
                            <select id="brand_id" name="brand_id" class="form-control" required>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand -> id}}">{{ $brand -> name }} ({{ $brand -> nationality }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- BUTTON --}}
                    <div class="form-group row">
                        <div class="col-6 offset-3">
                            <input id="model" type="submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
