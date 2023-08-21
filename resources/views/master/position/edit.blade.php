@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">Edit Position</h1>
    </div>
    <blockquote>
        <b>Keterangan!!</b><br>
        <small><cite title="Source Title">Inputan Yang Ditanda Bintang Merah (<span class="text-danger">*</span>) Harus Di Isi !!</cite></small>
    </blockquote>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mx-auto">
                        <div class="card-header">{{ __('Edit Position') }}
                            <a href="{{ route('position.index') }}" class="btn btn-primary float-right">Back</a>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('position.update', $position->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }} <span class="text-danger">*</span></label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salary') }}</label>

                                    <div class="col-md-6">
                                        <input id="v" type="text" class="form-control @error('First Name') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>

                                        @error('salary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('salary') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        <select name="status" class="form-control select2 @error('status') is-invalid @enderror">
                                            <option selected>Pilih data</option>
                                            <option value="Staff" {{ 'Staff' == old('status', $position->status ?? '') ? 'selected' : '' }}>Staff</option>
                                            <option value="Daily Worker" {{ 'Daily Worker' == old('status', $position->status ?? '') ? 'selected' : '' }}>Daily Worker</option>
                                            <option value="Magang" {{ 'Magang' == old('status', $position->status ?? '') ? 'selected' : '' }}>Magang</option>
                                        </select>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Simpan') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
