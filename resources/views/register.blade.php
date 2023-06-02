@extends('layout.main')

@section('body')
<div class="d-flex justify-content-center">
<div class="card mt-5" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Register</h5>
      <div class="row">
        <form action="/register" method="POST">
            @csrf
      <h6 class="card-subtitle mb-2 text-body-secondary">Silahkan Masukan Nama, Email dan Password</h6>
      <div class="mb-3">
        <label for="Name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Masukan Nama " name="name">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
      </div>
      <div class="mb-3">
        <input type="submit" class="btn btn-primary" id="submit"  name="submit">
      </div>
    </div>
        </form>
    </div>
  </div>
</div>
@endsection