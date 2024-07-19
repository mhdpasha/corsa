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
                     <button type="button" class="btn btn-soft-success" data-bs-toggle="modal" data-bs-target="#csvForm">
                        + Add via CSV
                     </button>

                  </div>

                  <button type="button" class="btn btn-outline-primary me-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                      </svg>
                  </button>

                </div>
             </div>
             <div class="card-body">
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
                                   <button type="submit" class="btn btn-sm btn-soft-warning">
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

 <!-- CSV Modal -->
 <div class="modal fade" id="csvForm" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Upload CSV Below</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form class="rounded p-4" action="{{ route('users.csv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <button type="submit" class="btn btn-soft-success mt-3 mb-1 w-100" id="submitBtn">Upload</button>
         </form>

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
                   <input type="text" class="form-control" id="name" name="name" autocomplete="off">
               </div>
               <div class="col-md-6">
                   <label for="department" class="form-label"><Datag></Datag>Department</label>
                   <input type="text" class="form-control" id="department" name="department" autocomplete="off">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-6">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" id="email" name="email" autocomplete="off">
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
           <button type="submit" class="btn btn-soft-primary mt-5 mb-1 w-100" id="submitBtn">Save</button>
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
