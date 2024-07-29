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
                    <div class="mx-auto text-center fw-bold w-100">
                        @if ($data->status == 'new')
                              <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> NEW </span>
                              @elseif ($data->status == 'accepted')
                              <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ACPT </span>
                              @elseif ($data->status == 'assigned')
                              <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> ASGN </span>
                              @elseif ($data->status == 'cleared')
                              <span class="badge rounded-pill bg-soft-primary" style="min-width: 60px;"> CLEAR </span>
                              @endif
                    </div>
                    
                    
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
                        <div class="row g-2">
                            @if($data->status == 'new')
                            <div class="col-12 col-md-auto">
                                <button id="accept-chat" class="btn btn-soft-success w-100">Accept</button>
                            </div>
                            <div class="col-12 col-md-auto">
                                <button id="assign-chat" class="btn btn-soft-warning w-100">Assign</button>
                            </div>
                            @endif
                            @livewire('send-message', ['requestId' => $data->id])
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script src="assets/js/chatroom.script.js"></script>

@endsection