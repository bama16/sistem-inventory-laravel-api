@extends('layouts.dashboard-admin')

@section('content')
<h1 class="mb-0" style="font-size: 30px; padding-left: 20px; padding-top: 20px;">Tambah User</h1>
<hr/>
<form action="{{ route('usermanagement.store') }}" method="post" style="padding-left: 20px; padding-right: 20px">
    @csrf
    <div class="mb-3">
        <div class="col">
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <input type="text" class="form-control" id="password" name="password" placeholder="password">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">            
            <select class="form-control" placeholder="roles" name="roles">
                <option value="operator">Operator</option>
                <option value="pimpinan">Pimpinan</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
@endsection