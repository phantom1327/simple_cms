@extends('layouts.layout')
@section('title', __('company.create_employee'))

@Section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__('company.create_employee')}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('employee.store')}}">
                @csrf
                <div class="card-body">
                  <div class="col-12 row">
                      <div class="form-group col-lg-4">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="fname" name="first_name" placeholder="Enter first name" value="{{old('first_name')}}">
                          @error('first_name')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                      </div>
                      <div class="form-group col-lg-4">
                          <label for="name">Last Name</label>
                          <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="name" name="last_name" placeholder="Enter last name" value="{{old('last_name')}}">
                          @error('last_name')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                      </div>
                      <div class="form-group col-lg-4">
                        <label>Company</label>
                        <select name="company_id" class="form-control form-select @error('company_id') is-invalid @enderror" style="width: 100%;">
                          <option value=""> -- Select Company --</option>
                          @foreach($companies as $id => $name)
                          <option value="{{$id}}">{{$name}}</option>
                          @endforeach
                        </select>
                        @error('company_id')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                      </div>
                  </div>
                  <div class="col-12 row">
                      <div class="form-group col-lg-6">
                          <label for="email">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                          @error('email')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                      </div>
                      <div class="form-group col-lg-6">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                          @error('phone')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endSection
@Section('pageScripts')
<script>
    $(document).ready(function () {
      $('.select2').select2()
    });
</script>
@endSection