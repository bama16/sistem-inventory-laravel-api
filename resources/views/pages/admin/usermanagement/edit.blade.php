@extends('layouts.dashboard-admin')

@section('content')
<h1 class="mb-0" style="font-size: 30px; padding-left: 20px; padding-top: 20px;">Edit User</h1>
<hr/>
<form action="{{ route('usermanagement.update', $user->id) }}" method="post" style="padding-left: 20px; padding-right: 20px">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <div class="col">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">            
            <select class="form-control" name="roles">
                <option value="operator">Operator</option>
                <option value="pimpinan">Pimpinan</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection