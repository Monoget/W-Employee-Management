@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">States</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update State') }}
                        <a href="{{ route('states.index') }}" class="float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('states.update', $state->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="country_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <select id="country_id" class="form-control" name="country_id"
                                            aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach($countries as $country)
                                            <option
                                                value="{{ $country->id }}" {{ $country->id==$state->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="first_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name', $state->name) }}" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-2 p-2 float-left">
                <form method="POST" action="{{ route('states.destroy', $state->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete {{ $state->name }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
