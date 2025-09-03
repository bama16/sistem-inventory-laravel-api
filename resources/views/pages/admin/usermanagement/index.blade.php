@extends('layouts.dashboard-admin')

@section('content')
<style>
    table,thead,tr,td,tbody{
        padding: 20px
    }
</style>

<div class="d-flex align-item-center justify-center-between">
    <a href="{{ route('usermanagement.create') }}" class="btn btn-primary">Tambah</a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>    
@endif
<table class="table table-hover p-4">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count() > 0)
            @foreach ($users as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->role }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="{{ route('usermanagement.edit', $rs->id) }}" type="button" style="margin-right: 10px" class="btn btn-warning">Edit</a>
                            <form action="{{ route('usermanagement.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4" class="text-center">Tidak ada data Product.</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection