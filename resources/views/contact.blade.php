@extends('layouts.app')
@section('content')
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create New Contact</div>
          <div class="card-body">
            <form method="POST" action="{{ route('contacts.store') }}">
              <div class="mb-3 row">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                <div class="col-md-6">
                  <input id="name" type="string" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus >
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label for="phonenumber" class="col-md-4 col-form-label text-md-end">Phone Number</label>
                <div class="col-md-6">
                  <input id="phone_number" type="string" class="form-control" name="phone_number" autofocus>
                </div>
              </div>

              <div class="mb-3 row">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
