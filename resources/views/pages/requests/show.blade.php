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
                    
                    <div class="ms-auto text-end">
                        <h5>{{ $data->created_at->translatedFormat('l, j F Y') }}</h5>
                        <p>pukul {{ $data->created_at->translatedFormat('h:i a') }}</p>
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
                        <!-- Message from Self (User 1) -->
                        <div class="d-flex justify-content-start mb-4">
                            <div class="p-3 bg-light rounded" style="max-width: 60%;">
                                <h5 class="fw-bold mb-2">{{ $data->requestor->name }} ({{ $data->requestor->department }})</h5>
                                <span>{{ $data->description }}</span>
                            </div>
                        </div>
                        {{-- <!-- Message from Self (User 2) -->
                        <div class="d-flex justify-content-end mb-4">
                            <div class="p-3 bg-primary text-white rounded" style="max-width: 80%;">
                                <h5 class="fw-bold text-white mb-2">Me</h5>
                                Hi John! How can I help you today?
                            </div>
                        </div>
                        <!-- Message from Self (User 1) -->
                        <div class="d-flex justify-content-start mb-4">
                            <div class="p-3 bg-light rounded" style="max-width: 80%;">
                                <h5 class="fw-bold mb-2">{{ $data->receiver->name }} ({{ $data->receiver->department }})</h5>
                                I'm having some issues with my account. I can't seem to log in and I've tried resetting my password multiple times. Can you assist me with this?
                            </div>
                        </div>
                        <!-- Message from Self (User 2) -->
                        <div class="d-flex justify-content-end mb-4">
                            <div class="p-3 bg-primary text-white rounded" style="max-width: 80%;">
                                <h5 class="fw-bold text-white mb-2">Me</h5>
                                Sure, let me check your account details. One moment, please.
                            </div>
                        </div>
                        <!-- Message from User 2 (continued) -->
                        <div class="d-flex justify-content-end mb-4">
                            <div class="p-3 bg-primary text-white rounded" style="max-width: 80%;">
                                <h5 class="fw-bold text-white mb-2">Me</h5>
                                It seems there was a temporary lock on your account due to multiple failed login attempts. I've reset it for you. Please try logging in again now.
                            </div>
                        </div> --}}
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
                        @else
                        @endif
                            <div class="col-12 col-md d-flex">
                                <div class="input-group w-100">
                                    <input {{ ($data->status == 'cleared' ? 'disabled' : '') }} type="text" id="chat-input" class="form-control" placeholder="Type your message...">
                                    <button {{ ($data->status == 'cleared' ? 'disabled' : '') }} id="send-chat" class="btn btn-soft-primary">
                                        <i class="icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783Z" fill="currentColor"></path>
                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M3.01049 16.8079C2.81849 16.8079 2.62649 16.7349 2.48049 16.5879C2.18749 16.2949 2.18749 15.8209 2.48049 15.5279L3.84549 14.1619C4.13849 13.8699 4.61349 13.8699 4.90649 14.1619C5.19849 14.4549 5.19849 14.9299 4.90649 15.2229L3.54049 16.5879C3.39449 16.7349 3.20249 16.8079 3.01049 16.8079ZM6.77169 18.0003C6.57969 18.0003 6.38769 17.9273 6.24169 17.7803C5.94869 17.4873 5.94869 17.0133 6.24169 16.7203L7.60669 15.3543C7.89969 15.0623 8.37469 15.0623 8.66769 15.3543C8.95969 15.6473 8.95969 16.1223 8.66769 16.4153L7.30169 17.7803C7.15569 17.9273 6.96369 18.0003 6.77169 18.0003ZM7.02539 21.5683C7.17139 21.7153 7.36339 21.7883 7.55539 21.7883C7.74739 21.7883 7.93939 21.7153 8.08539 21.5683L9.45139 20.2033C9.74339 19.9103 9.74339 19.4353 9.45139 19.1423C9.15839 18.8503 8.68339 18.8503 8.39039 19.1423L7.02539 20.5083C6.73239 20.8013 6.73239 21.2753 7.02539 21.5683Z" fill="currentColor"></path>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection