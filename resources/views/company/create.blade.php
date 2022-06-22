@extends('layouts.layout')
@section('title', __('company.create_company'))

@Section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__('company.create_company')}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="col-12 row">
                    <div class="form-group col-lg-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 row">
                  <div class="form-group col-lg-6">
                    <label for="url">Website</label>
                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" id="url" placeholder="Enter URL" value="{{old('website')}}">
                        @error('website')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="logo">Logo</label>
                    <div class="input-group">
                        <input type="file" name="logo" class="form-control  @error('logo') is-invalid @enderror" id="logo">
                        <label for="logo">Choose file</label>
                        @error('logo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
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