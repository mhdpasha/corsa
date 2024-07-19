@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
       <div class="row">
          <div class="col-xl-3 col-lg-4">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Profile</h4>
                   </div>
                </div>
                <div class="card-body">
                   <div>
                      <div class="form-group">
                         <div class="profile-img-edit position-relative">
                            <img src="../../assets/images/avatars/01.png" alt="profile-pic" class="theme-color-default-img profile-pic rounded avatar-100">
                            <img src="../../assets/images/avatars/avtar_1.png" alt="profile-pic" class="theme-color-purple-img profile-pic rounded avatar-100">
                            <img src="../../assets/images/avatars/avtar_2.png" alt="profile-pic" class="theme-color-blue-img profile-pic rounded avatar-100">
                            <img src="../../assets/images/avatars/avtar_4.png" alt="profile-pic" class="theme-color-green-img profile-pic rounded avatar-100">
                            <img src="../../assets/images/avatars/avtar_5.png" alt="profile-pic" class="theme-color-yellow-img profile-pic rounded avatar-100">
                            <img src="../../assets/images/avatars/avtar_3.png" alt="profile-pic" class="theme-color-pink-img profile-pic rounded avatar-100">
                            <div class="upload-icone bg-primary">
                               <svg class="upload-button icon-14" width="14" viewBox="0 0 24 24">
                                  <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z"></path>
                               </svg>
                               <input class="file-upload" type="file" accept="image/*">
                            </div>
                         </div>
                         
                      </div>
                      <div class="form-group">
                         <label class="form-label">Department :</label>
                         <select name="type" class="selectpicker form-control" data-style="py-0" disabled>
                            <option>{{ $profile->department }}</option>
                         </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Access :</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0" disabled>
                           <option>{{ ucfirst($profile->role) }}</option>
                        </select>
                     </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-8">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Data Information</h4>
                   </div>
                </div>
                <div class="card-body">
                   <div class="new-user-info">
                      <form action="{{ route('profile.update', $profile)}}" method="POST">
                        @csrf
                        @method('PATCH')
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label class="form-label" for="name">Name :</label>
                               <input type="text" class="form-control" id="name" placeholder="Full Name" value="{{ $profile->name }}" name="name" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="email">Email :</label>
                               <input type="text" class="form-control" id="email" placeholder="Email" value="{{ $profile->email }}" name="email" autocomplete="off">
                            </div>
                            <input type="hidden" name="id" value="{{ $profile->id }}">
                            
                            {{-- <div class="form-group col-md-12">
                               <label class="form-label" for="cname">Company Name:</label>
                               <input type="text" class="form-control" id="cname" placeholder="Company Name">
                            </div> --}}
                         </div>
                         <hr>
                         {{-- <h5 class="mb-3">Security</h5>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label class="form-label" for="uname">User Name:</label>
                               <input type="text" class="form-control" id="uname" placeholder="User Name">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="pass">Password:</label>
                               <input type="password" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="rpass">Repeat Password:</label>
                               <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                            </div>
                         </div> --}}
                         {{-- <div class="checkbox">
                            <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                         </div> --}}
                         <button type="submit" class="btn btn-primary w-100">Save</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    </div>
@endsection