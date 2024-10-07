@extends('layouts.master')

@section('title', 'Form Tambah User')

@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Foem Tambah User</h3>
                            <a href="/user" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        value="{{ old('name', $user->name) }}"
                                    >
                                    @error('name')
                                        <div class="text-danger fs-6">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input 
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ old('email', $user->email) }}"
                                    >
                                    @error('email')
                                        <div class="text-danger fs-6">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection