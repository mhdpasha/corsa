@extends('templates.main')
@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Current Task(s)</h4>
                        </div>
                        <div class="card-action">
                            <a href="/requests" class="btn btn-primary" role="button">See Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card  ">
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
                        <p>Assigned to: {{ auth()->user()->name }}</p>
                        @forelse($tasks as $task)
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>{{ $task->title }}</h5>
                                        <p>{{ $task->description }}</p>
                                        <p>{{ $task->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                           @empty
                           <p class="text-center pb-3">No active tasks found.</p>
                        @endforelse
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