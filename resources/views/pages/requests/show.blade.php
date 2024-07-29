@extends('templates.main')
@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
            <div class="card-header container d-flex justify-content-between">
                <div class="header-title d-flex justify-content-between w-100 px-3 pt-2">
                    <div class="me-auto">
                        <h5>
                            {{ $data->title }} - {{ $data->location }}
                        </h5> 
                        <p>{{ $data->requestor->name }} ({{ $data->requestor->department }}) calling for {{ $data->type }}</p>
                    </div>
                    {{ $data->pictures }}
                    <div class="ms-auto text-end">
                        <h5>{{ $data->created_at->translatedFormat('l, j F Y') }}</h5>
                        <p>pukul {{ $data->created_at->translatedFormat('H:i a') }}</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="chat px-5" class="">
                    <div class="mx-auto text-center fw-bold w-100">
                        Chat Room
                    </div>
                    
                    @livewire('status-update', ['request' => $data])
                    
                    <div id="chat-messages" class="mb-5 mt-5">

                        <!-- Init Message-->
                        @if($data->requestor->id == auth()->id())
                            <div class="d-flex justify-content-end mb-4 text-white">
                                <div class="p-3 bg-primary rounded" style="max-width: 60%;">
                                    <h5 class="fw-bold mb-2 text-white">Me</h5>
                                    @if($data->picture)
                                    <a href="{{ url('storage/'.$data->picture) }}">
                                        <img src="{{ asset('storage/'.$data->picture) }}" alt="pic" height="auto" width="300px" class="rounded m-4">
                                    </a>
                                    @else
                                    <p class="m-5 opacity-75">No picture provided</p>
                                    @endif
                                    <p class="mb-0">{{ $data->description }}<span class="float-end fs-6 fw-lighter ms-5">{{ $data->updated_at->translatedFormat('H:i') }}</span></p>
                                </div>
                            </div>
                        @else
                            <div class="d-flex justify-content-start mb-4">
                                <div class="p-3 bg-light rounded" style="max-width: 60%;">
                                    <h5 class="fw-bold mb-2">{{ $data->requestor->name }} ({{ $data->requestor->department }})</h5>
                                    @if($data->picture)
                                    <a href="{{ url('storage/'.$data->picture) }}">
                                        <img src="{{ asset('storage/'.$data->picture) }}" alt="pic" height="auto" width="300px" class="rounded m-4">
                                    </a>
                                    @else
                                    <p class="m-5 opacity-75">No picture provided</p>
                                    @endif
                                    <p class="text-black mb-0">{{ $data->description }}<span class="float-end fs-6 text-secondary fw-lighter">{{ $data->updated_at->translatedFormat('H:i') }}</span></p>
                                </div>
                            </div>
                        @endif

                        @livewire('chat-message', ['requestId' => $data->id])
                    </div>
                    <div class="container mt-4">
                        @livewire('task-control', ['request' => $data])
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


        <!-- Modal -->
        <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="assignModalLabel">Add new request</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <h1>asd</h1>
              </div>
            </div>
          </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

let timeout
let debounceTimeout

function debounce(func, wait) {
    return function(...args) {
        clearTimeout(debounceTimeout)
        debounceTimeout = setTimeout(() => func.apply(this, args), wait)
    }
}

function handleInactivity() {
    window.alert('Inactive. redirecting to requests list')
    window.location.href = '/requests'
}

function resetTimer() {
    if (timeout) {
        clearTimeout(timeout)
    }
    console.log('triggered')
    timeout = setTimeout(handleInactivity, 20000) // 20 seconds timeout
}
const debouncedResetTimer = debounce(resetTimer, 200)
document.addEventListener('DOMContentLoaded', resetTimer)
document.addEventListener('mousemove', debouncedResetTimer)
document.addEventListener('keypress', debouncedResetTimer)
document.addEventListener('touchstart', debouncedResetTimer)
document.addEventListener('click', debouncedResetTimer)
document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'visible') {
        resetTimer() 
    }
})
})
</script>

@endsection