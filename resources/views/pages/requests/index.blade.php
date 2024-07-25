@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body d-flex justify-content-between align-items-center">
                  <div class="card-title mb-0">
                      <h4 class="mb-0">Active Requests</h4>
                  </div>
                  <div class="card-action">
                      <a href="/timeline" class="btn btn-primary" role="button">See Timeline</a>
                  </div>
              </div>
              <div class="card-body">
               @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif

                    <div class="row">
                        @forelse($request as $request)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>{{ $request->title }}</h5>
                                        <p>{{ $request->description }}</p>
                                        <p>{{ $request->created_at->format('d M Y') }}</p>
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

                  <button type="button" class="btn btn-soft-primary me-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                      </svg>
                  </button>

                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive">

                   
                  @livewire('request-table')


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
                   <input type="text" class="form-control" id="title" name="title" placeholder="What happened?" autocomplete="off">
               </div>
               <div class="col-md-6">
                   <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                   <input type="text" class="form-control" id="description" name="description" placeholder="Short description" autocomplete="off">
               </div>
           </div>
            <div class="row mt-3">
               <div class="col-md-6">
                  <label for="exampleDataList" class="form-label">Location <span class="text-danger">*</span></label>
                  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to or select" name="location">
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

 <script>
   document.addEventListener('DOMContentLoaded', function() {
       const urlParams = new URLSearchParams(window.location.search)
       if (urlParams.has('openModal') && urlParams.get('openModal') === 'true') {
           let reqModal = new bootstrap.Modal(document.getElementById('addModal'), {
               keyboard: false
           })
           reqModal.show()
       }
   })
</script>

@endsection
