@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departement</h1>
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
            <form method="GET" action="{{ route('departement.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="Type here to search">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2 float-left">Search</button>
                    </div>
                    <div class="col">
                        <a href="{{ route('departement.create') }}" class="btn btn-primary mb-2 float-right">Create</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departement as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('departement.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('departement.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
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
