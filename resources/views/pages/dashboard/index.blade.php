@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
     <div class="col-md-12 col-lg-12">
        <div class="row row-cols-1">
           <div class="overflow-hidden d-slider1 ">
              <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Requests</p>
                             <h4 class="counter">{{ $data['total'] }}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Ongoing</p>
                             <h4 class="counter">{{ $data['active'] }}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Unresolved</p>
                             <h4 class="counter">{{ $data['new'] }}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Resolved</p>
                             <h4 class="counter">{{ $data['cleared'] }}</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Net Income</p>
                             <h4 class="counter">$150K</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                             <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Today</p>
                             <h4 class="counter">$4600</h4>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                    <div class="card-body">
                       <div class="progress-widget">
                          <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                             <svg class="card-slie-arrow icon-24 " width="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                             </svg>
                          </div>
                          <div class="progress-detail">
                             <p  class="mb-2">Members</p>
                             <h4 class="counter">11.2M</h4>
                          </div>
                       </div>
                    </div>
                 </li>
              </ul>
              <div class="swiper-button swiper-button-next"></div>
              <div class="swiper-button swiper-button-prev"></div>
           </div>
        </div>
     </div>
     <div class="col-md-12 col-lg-8">
        <div class="row">
           <div class="col-md-12">
              <div class="card" data-aos="fade-up" data-aos-delay="800">
               
                 <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                    <div class="header-title mb-3">
                       <h4 class="card-title">Active Requests</h4>
                       <p class="mb-0">Logged in as {{ auth()->user()->name }}</p>          
                    </div>
                    <div class="dropdown mb-3">
                     <a href="#" class="dropdown-toggle btn btn-soft-primary" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Quick Action
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/requests">Requests</a></li>
                        <li><a class="dropdown-item" href="/timeline">Timeline</a></li>
                        <li><a class="dropdown-item" href="/report">Report</a></li>
                     </ul>
                  </div>
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
                             <th style="max-width: 10px">Action</th>
                           </tr>
                        </thead>
                      
                        <tbody>
                         @foreach ($requests as $request)
                         <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $request->requestor->name }}</td>
                            <td>{{ $request->type }}</td>
                            <td>{{ $request->location }}</td>
                            <td>{{ $request->title }}</td>
                            <td class="text-center">
                               @if($request->picture)
                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M21.9999 14.7024V16.0859C21.9999 16.3155 21.9899 16.5471 21.9699 16.7767C21.6893 19.9357 19.4949 22 16.3286 22H7.67126C6.06806 22 4.71535 21.4797 3.74341 20.5363C3.36265 20.1864 3.042 19.7753 2.7915 19.3041C3.12217 18.9021 3.49291 18.462 3.85363 18.0208C4.46485 17.289 5.05603 16.5661 5.42677 16.0959C5.97788 15.4142 7.43078 13.6196 9.44481 14.4617C9.85563 14.6322 10.2164 14.8728 10.547 15.0833C11.3586 15.6247 11.6993 15.7851 12.2705 15.4743C12.9017 15.1335 13.3125 14.4617 13.7434 13.76C13.9739 13.388 14.2043 13.0281 14.4548 12.6972C15.547 11.2736 17.2304 10.8926 18.6332 11.7348C19.3346 12.1559 19.9358 12.6872 20.4969 13.2276C20.6172 13.3479 20.7374 13.4592 20.8476 13.5695C20.9979 13.7198 21.4989 14.2211 21.9999 14.7024Z" fill="currentColor"></path>
                                     <path opacity="0.4" d="M16.3387 2H7.67134C4.27455 2 2 4.37607 2 7.91411V16.086C2 17.3181 2.28056 18.4119 2.79158 19.3042C3.12224 18.9022 3.49299 18.4621 3.85371 18.0199C4.46493 17.2891 5.05611 16.5662 5.42685 16.096C5.97796 15.4143 7.43086 13.6197 9.44489 14.4618C9.85571 14.6323 10.2164 14.8729 10.5471 15.0834C11.3587 15.6248 11.6994 15.7852 12.2705 15.4734C12.9018 15.1336 13.3126 14.4618 13.7435 13.759C13.9739 13.3881 14.2044 13.0282 14.4549 12.6973C15.5471 11.2737 17.2305 10.8927 18.6333 11.7349C19.3347 12.1559 19.9359 12.6873 20.497 13.2277C20.6172 13.348 20.7375 13.4593 20.8477 13.5696C20.998 13.7189 21.499 14.2202 22 14.7025V7.91411C22 4.37607 19.7255 2 16.3387 2Z" fill="currentColor"></path>
                                     <path d="M11.4543 8.79668C11.4543 10.2053 10.2809 11.3783 8.87313 11.3783C7.46632 11.3783 6.29297 10.2053 6.29297 8.79668C6.29297 7.38909 7.46632 6.21509 8.87313 6.21509C10.2809 6.21509 11.4543 7.38909 11.4543 8.79668Z" fill="currentColor"></path>
                                  </svg>
                               @endif
                            </td> 
                            <td class="text-center">
                               @if ($request->status == 'new')
                               <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> NEW </span>
                               @elseif ($request->status == 'accepted')  
                               <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ACPT </span>
                               @elseif ($request->status == 'assigned')
                               <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ASGN </span>
                               @elseif ($request->status == 'cleared')
                               <span class="badge rounded-pill bg-soft-primary" style="min-width: 60px;"> CLEAR </span>
                               @endif
                            </td>
                            <td>{{ $request->detailed_created_at }}</td>
                            <td class="flex">
                               <a href="{{ route('requests.show', $request->slug) }}" class="btn btn-sm btn-soft-primary">Chatroom</a>
                            </td>
                         </tr>
                         @endforeach
                       </tbody>
   
                     </table>
                   </div>
                 </div>

                 <div class="card-body">
                    
                 </div>

              </div>
           </div>
           
        </div>
     </div>
     
     <div class="col-md-12 col-lg-4">
        <div class="row">
              <div class="card" data-aos="fade-up" data-aos-delay="500">
                 <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div>
                        <h4>Personal Tasks</h4>
                        <p class="mb-0 text-gray">{{ auth()->user()->name . ' (' . auth()->user()->department . ')'}}</p>          
                     </p>
                     </div>
                     <div>
                        <a class="btn btn-soft-primary" href="/task">Go to Task</a>
                     </div>
                  </div>

                  <div class="text-center">
                     <div class="d-flex flex-wrap justify-content-center">
                        @forelse ($tasks as $task)
                        <a href="{{ route('requests.show', $task->slug) }}" class="col-6 col-md-3 m-2">
                           <div class="card bg-primary opacity-40 w-100 h-100">
                              <div class="card-body d-flex align-items-center justify-content-center">
                                 <p class="text-white text-center mb-0">{{ $task->title }}</p>
                              </div>
                           </div>
                        </a>
                        @empty
                           <p class="m-5">There is no task for now</p>
                        @endforelse
                     </div>
                  </div>

                 </div>
              </div> 
           </div>
           <div class="col-md-12 col-lg-12">
              <div class="card" data-aos="fade-up" data-aos-delay="600">
                 <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="mb-2 card-title">Latest Requests by Team</h4>
                    </div>
                 </div>
                 <div class="card-body">

                  @foreach ($data['latest'] as $request)
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">{{ $request->title }} at {{ $request->location }}</h6>
                        <span class="mb-0">Requested by {{ $request->requestor->name }} on {{ $request->created_at->translatedFormat('j/m/Y') }}</span>
                     </div>
                  </div>
                  @endforeach

                  <a href="/requests" class="btn btn-soft-primary mt-4 w-100">Go to Request</a>
                 </div>
              </div>
           </div>
        </div>
     </div> 
     
  </div>
        </div>
@endsection