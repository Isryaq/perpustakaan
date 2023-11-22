@extends('layouts.main')

@section('container')
<div class="bg-light p-3 card">
<div class="card-body">
  <img src="{{ asset('admin/images/icon/logo-bl.png') }}" alt="biliard" width="100">
  <div class="title-top mb-5">
      <h2 class="fw-bold">Reservation Table</h2>
  </div>
  <form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}
    <div class="mb-3">
      <input type="text" class="form-control" id="inputname" placeholder="Name" name="nama">
      <!-- <label for="inputname">Email address</label> -->
    </div>
    <div class="mb-3">
      <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
      <!-- <label for="inputemail">Email address</label> -->
    </div>
    <div class="mb-3">
      <textarea class="form-control" placeholder="Enter Your Table Reserved" id="floatingTextarea2" name="pesan" style="height: 100px;"></textarea>
      <!-- <label for="inputname">Email address</label> -->
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection