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
                                <p>{{ $data->requestor->name }} ({{ $data->requestor->department }}) calling for
                                    {{ $data->type }}</p>
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

                                @if ($data->requestor->id == auth()->id())
                                    <div class="d-flex justify-content-end mb-4 text-white">
                                        <div class="p-3 bg-primary rounded" style="max-width: 60%;">
                                            <h5 class="fw-bold mb-2 text-white">Me</h5>
                                            @if ($data->picture)
                                                <a href="{{ url('storage/' . $data->picture) }}">
                                                    <img src="{{ asset('storage/' . $data->picture) }}" alt="pic" class="img-fluid rounded my-4">
                                                </a>
                                            @else
                                                <p class="m-3 opacity-75">No picture provided</p>
                                            @endif
                                            <p class="mb-0">{{ $data->description }}<span class="float-end fs-6 fw-lighter ms-5">{{ $data->updated_at->translatedFormat('H:i') }}</span></p>
                                        </div>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="p-3 bg-light rounded" style="max-width: 60%;">
                                            <h5 class="fw-bold mb-2">{{ $data->requestor->name }} ({{ $data->requestor->department }})</h5>
                                            @if ($data->picture)
                                                <a href="{{ url('storage/' . $data->picture) }}">
                                                    <img src="{{ asset('storage/' . $data->picture) }}" alt="pic" class="img-fluid rounded my-4">
                                                </a>
                                            @else
                                                <p class="m-3 opacity-75">No picture provided</p>
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
            <div class="modal-content p-5">
                <form action="{{ route('requests.update', $data) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <h1 class="modal-title fs-5" id="assignModalLabel">Assign this request to</h1>
                    <input type="hidden" name="request_id" value="{{ $data->id }}">
                    <select class="form-select my-3" name="receiver_id" id="receiver_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->department }})</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-soft-primary w-100">Assign</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const acceptButton = document.getElementById('accept-chat');

            if (acceptButton) {
                acceptButton.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (confirm('Are you sure you want to accept this request?')) {
                        Livewire.emit('callMethod', 'update');
                    }
                });
            }

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
                timeout = setTimeout(handleInactivity, 20000)
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
