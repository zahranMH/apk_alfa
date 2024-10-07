@extends('layouts.master')

@section('title', 'User')

@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a href="/user/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </thead>
                                <tbody>

                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="d-flex">
                                            <a href="/user/{{ $user->id }}/edit" class="btn btn-warning mr-2">Edit</a>
                                            <form action="/user/{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button trpe="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if('berhasil')

<script>
    Swal.fire({
    title: "Good job!",
    text: "{{ session('berhasil') }}",
    icon: "success"
});

</script>

@endif

@endsection