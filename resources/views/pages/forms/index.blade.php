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
                        + Add Location
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
                           <th>Location</th>
                           <th>Floor</th>
                           <th style="width: 20px"></th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->location }}</td>
                            <td>{{ $data->floor }}</td>
                            <td class="d-flex gap-2">
                              <button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#addModal{{ $data->id }}">
                                 Edit
                              </button>
                              <form action="{{ route('forms.destroy', $data) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                   <button type="submit" class="btn btn-sm btn-soft-warning">
                                     Delete
                                  </button>
                               </form>

                              <!-- Edit Modal -->
                             <div class="modal fade" id="addModal{{ $data->id }}" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <h1 class="modal-title fs-5" id="addModalLabel">Edit data</h1>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form class="rounded p-4" action="{{ route('forms.update', $data) }}" id="editForm" method="POST">
                                         @csrf
                                         @method('PATCH')
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="location" class="form-label">Location</label>
                                                 <input type="text" class="form-control" id="location" name="location" value="{{ $data->location }}">
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="floor" class="form-label">Floor</label>
                                                 <input type="text" class="form-control" id="floor" name="floor" value="{{ $data->floor }}">
                                             </div>
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
             <h1 class="modal-title fs-5" id="addModalLabel">Add data</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="rounded p-4" action="{{ route('forms.store') }}" id="addForm" method="POST">
             @csrf
             <div class="row">
                 <div class="col-md-6">
                     <label for="location" class="form-label">Location</label>
                     <input type="text" class="form-control" id="location" name="location" autocomplete="off" value="{{ old('location') }}">
                 </div>
                 <div class="col-md-6">
                     <label for="floor" class="form-label">Floor</label>
                     <input type="text" class="form-control" id="floor" name="floor" autocomplete="off" value="{{ old('floor') }}">
                 </div>
              </div>
             <button type="submit" class="btn btn-soft-primary mt-5 mb-1 w-100" id="submitBtn">Submit</button>
          </form>
      
      </div>
    </div>
  </div>


@endsection
