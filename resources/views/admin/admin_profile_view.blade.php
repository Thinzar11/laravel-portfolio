@extends('admin.admin-master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
       <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" class="card-img-top rounded-circle" alt="..." style="width:100px">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Name : {{$adminData->name}}</h5><hr>
                  <h5 class="card-title">User Email : {{$adminData->email}}</h5><hr>
                  <h5 class="card-title">Username : {{$adminData->username}}</h5><hr>
                  <a href="#" class="btn btn-primary ">Edit Profile</a>
                </div>
              </div>
        </div>
       </div>
    </div>
</div>
@endsection
