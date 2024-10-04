@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body d-flex justify-content-between align-items-center">
                  <div class="card-title mb-0">
                      <h4 class="mb-0">Your Requests</h4>
                  </div>
                  <div class="card-action">
                      <a href="/timeline" class="btn btn-primary" role="button">See Timeline</a>
                  </div>
              </div>
              <div class="card-body">
                    <div class="row">
                        @forelse($request as $request)
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <a href="{{ route('requests.show', $request->slug) }}" >
                                        <div class="card-body text-black">
                                            <h4>{{ $request->title }} - {{ $request->location }}</h4>
                                            <p class="mb-3">{{ $request->created_at->translatedFormat('j F Y') }}</p>
                                            <p class="opacity-50 fs-sm">{{ $request->description }}</p>
                                        </div>
                                    </a>
                                    <div class="card-footer d-flex gap-2">
                                        <form class="w-100" action="{{ route('requests.update', $request) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                            <input type="hidden" name="cleared" value="cleared">
                                            <button onclick="return confirm(`Mark '{{ $request->title }}' as done?`)" class="btn btn-soft-success w-100">Mark as Done</button>
                                        </form>
                                        <a href="{{ route('requests.show', $request->slug) }}" class="btn btn-soft-primary w-30">Chatroom</a>
                                    </div>
                                </div> 
                            </div>
                           @empty
                           <p class="text-center pb-3">No active requests found.</p>
                        @endforelse
                    </div>
              </div>
          </div>
      </div>
   </div>
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title d-flex justify-content-between w-100">

                  <div>
                     <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        + Add Requests
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
                          <th style="max-width: 1px"></th>
                          <th style="max-width: 10px">Requestor</th>
                          <th style="max-width: 10px">Dept</th>
                          <th style="max-width: 10px">Location</th>
                          <th style="max-width: 10px">Title</th>
                          <th style="max-width: 10px" class="text-center"></th>
                          <th style="max-width: 10px" class="text-center">Status</th>
                          <th style="max-width: 10px">Date</th>
                          <th st   yle="max-width: 10px">Action</th>
                        </tr>
                     </thead>
                   
                     @livewire('request-table')

                  </table>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Add new request</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form class="px-3" action="{{ route('requests.store') }}" method="POST" id="addForm" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
               <div class="col-md-6">
                   <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                   <input type="text" class="form-control" id="title" name="title" placeholder="What happened?" autocomplete="off" value="{{ old('title') }}">
               </div>
               <div class="col-md-6">
                   <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                   <input type="text" class="form-control" id="description" name="description" placeholder="Short description" autocomplete="off" value="{{ old('description') }}">
               </div>
           </div>
            <div class="row mt-3">
               <div class="col-md-6">
                  <label for="exampleDataList" class="form-label">Location <span class="text-danger">*</span></label>
                  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to or select" name="location" value="{{ old('location') }}">
                  <datalist id="datalistOptions">
                    @foreach ($form as $location)
                     <option value="{{ $location->location }}">
                    @endforeach
                  </datalist>
               </div>
               <div class="col-md-6">
                  <label for="department" class="form-label">Calling for Dept <span class="text-danger">*</span></label>
                  <select name="type" class="form-select w-100">
                     <option value="FIRE">FIRE</option>
                     <option value="Housekeeping">Housekeeping</option>
                     <option value="Maintenance">Maintenance</option>
                     <option value="Concierge">Concierge</option>
                     <option value="Room Service">Room Service</option>
                     <option value="Lost and Found">Lost and Found</option>
                  </select>
               </div>
            </div>
            <label for="formFile" class="form-label mt-5">1 Photo as support (optional)</label>
            <input class="form-control" type="file" id="formFile" name="picture">

            <input type="hidden" name="requestor_id" value="{{ auth()->user()->id }}">

           <button type="submit" class="btn btn-soft-primary mt-5 mb-3 w-100" id="submitBtn">Submit</button>
         </form>

     </div>
   </div>
 </div>
 

<script src="assets/js/request.js"></script>

@endsection
