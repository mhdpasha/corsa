@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title d-flex justify-content-between w-100">

                  <div class="">
                     <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#addForm">
                        + Add User
                     </button>
                  </div>

                </div>
             </div>
             <div class="card-body">
               @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert"
                                data-dismiss="alert" style="cursor: pointer;">
                                <ul style="list-style-type: >">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (session()->has('added'))
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert"
                                data-dismiss="alert" style="cursor: pointer;">
                                <div class="d-flex items-center justify-content-center">
                                    {{ session('added') }}
                                </div>
                            </div>
                        @elseif (session()->has('saved'))
                            <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert"
                                data-dismiss="alert" style="cursor: pointer;">
                                <div class="d-flex items-center justify-content-center">
                                    {{ session('saved') }}
                                </div>
                            </div>
                        @elseif (session()->has('deleted'))
                            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert"
                                data-dismiss="alert" style="cursor: pointer;">
                                <div class="d-flex items-center justify-content-center">
                                    {{ session('deleted') }}
                                </div>
                            </div>
                        @endif
                <div class="table-responsive">

                   <table id="datatable" class="table table-striped" data-toggle="data-table">
                      <thead>
                         <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Department</th>
                           <th>Access</th>
                           <th style="width: 10px"></th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td class="d-flex gap-2">
                              <button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#editForm{{ $user->id }}">
                                 Edit
                              </button>
                              <form action="{{ route('users.destroy', $user) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                   <button onclick="return confirm(`Are you sure you want to delete {{ $user->name }} ?`)" type="submit" class="btn btn-sm btn-soft-warning">
                                     Delete
                                  </button>
                               </form>

                              <!-- Edit Modal -->
 <div class="modal fade" id="editForm{{ $user->id }}" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Edit User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form class="rounded p-4" action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
               <div class="col-md-6">
                   <label for="name" class="form-label">Name</label>
                   <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{ $user->name }}">
               </div>
               <div class="col-md-6">
                   <label for="department" class="form-label">Department</label>
                   <input type="text" class="form-control" id="department" name="department" autocomplete="off" value="{{ $user->department }}">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-6">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="{{ $user->email }}">
               </div>
               <div class="col-md-6">
                   <label for="password" class="form-label" id="togglePassword">Password</label>
                   <input disabled type="password" class="form-control" id="password" name="password" autocomplete="off" value="{{ $user->view_password }}">
               </div>
            </div>
            <div class="w-100 mt-3">
               <label for="role" class="form-label">Access</label>
               <select name="role" class="form-select w-100">
                  <option value="user">User</option>
                  <option value="admin" {{ ($user->role == 'admin') ? 'selected' : '' }}>Admin</option>
               </select>
           </div>
           <button type="submit" class="btn btn-soft-primary mt-5 mb-1 w-100" id="submitBtn">Save</button>
         </form>
     </div>
   </div>
 </div>



                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>

                </div>
             </div>
          </div>
       </div>
    </div>
</div>

 <!-- Add Modal -->
 <div class="modal fade" id="addForm" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Add User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form class="rounded p-4" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="row">
               <div class="col-md-6">
                   <label for="name" class="form-label">Name</label>
                   <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{ old('name') }}">
               </div>
               <div class="col-md-6">
                   <label for="department" class="form-label"><Datag></Datag>Department</label>
                   <input type="text" class="form-control" id="department" name="department" autocomplete="off" value="{{ old('department') }}">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-6">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="{{ old('email') }}">
               </div>
               <div class="col-md-6">
                   <label for="password" class="form-label" id="togglePassword" >Password</label>
                   <input type="password" class="form-control" id="password" name="password" autocomplete="off">
               </div>
            </div>
            <div class="w-100 mt-3">
               <label for="role" class="form-label">Access</label>
               <select name="role" class="form-select w-100">
                  <option value="user">User</option>
                  <option value="admin">Admin</option>
               </select>
           </div>
           <button type="submit" class="btn btn-soft-primary mt-5 mb-1 w-100" id="submitBtn">Submit</button>
         </form>
     </div>
   </div>
 </div>

 <script>
   document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelectorAll('[id^="togglePassword"]');
        const passwords = document.querySelectorAll('[id^="password"]');

        togglePassword.forEach((toggle, index) => {
            toggle.style.cursor = 'pointer'
            toggle.addEventListener('click', function() {
                const type = passwords[index].getAttribute('type') === 'password' ? 'text' : 'password';
                passwords[index].setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        });
    });
 </script>
@endsection
