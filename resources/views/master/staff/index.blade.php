@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Staff</h1>
    </div>
    <!-- Message -->
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="col-12">
        <div class="card-header">
            <form method="GET" action="{{ route('staff.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="Type here to search">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2 float-left">Search</button>
                    </div>
                    <div class="col">
                        <a href="{{ route('master.staff.create') }}" class="btn btn-primary mb-2 float-right">Create</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <div style="overflow-x: auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tmp_lahir</th>
                            <th scope="col">Tggl_lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jns_Kelamin</th>
                            <th scope="col">Position</th>
                            <th scope="col">Departement</th>
                            <th scope="col">No_Hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td style="line-height: 1">
                                    {{ $item->staff->name?? '' }} <br>
                                    <small><span class="badge {{ $item->staff->status == 'Staff' ? 'badge-info' : 'badge-secondary' }}">{{ $item->position->status ?? '' }}</span></small>
                                </td>
                                <td>
                                    <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('staff.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method9('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>

@endsection
