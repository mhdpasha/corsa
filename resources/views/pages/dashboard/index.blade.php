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
                    <div class="header-title">
                       <h4 class="card-title">$855.8K</h4>
                       <p class="mb-0">Gross Sales</p>          
                    </div>
                    <div class="d-flex align-items-center align-self-center">
                       <div class="d-flex align-items-center text-primary">
                          <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                             <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                             </g>
                          </svg>
                          <div class="ms-2">
                             <span class="text-gray">Sales</span>
                          </div>
                       </div>
                       <div class="d-flex align-items-center ms-3 text-info">
                          <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                             <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                             </g>
                          </svg>
                          <div class="ms-2">
                             <span class="text-gray">Cost</span>
                          </div>
                       </div>
                    </div>
                    <div class="dropdown">
                       <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                       This Week
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                          <li><a class="dropdown-item" href="#">This Week</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                       </ul>
                    </div>
                 </div>

                 <div class="card-body">
                    
                 </div>

              </div>
           </div>
           <div class="col-md-12 col-xl-6">
              <div class="card" data-aos="fade-up" data-aos-delay="900">
                 <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Earnings</h4>            
                    </div>   
                    <div class="dropdown">
                       <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          This Week
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">This Week</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="card-body">
                    <div class="flex-wrap d-flex align-items-center justify-content-between">
                       <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                       <div class="d-grid gap col-md-4 col-lg-4">
                          <div class="d-flex align-items-start">
                             <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                <g>
                                   <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                </g>
                             </svg>
                             <div class="ms-3">
                                <span class="text-gray">Fashion</span>
                                <h6>251K</h6>
                             </div>
                          </div>
                          <div class="d-flex align-items-start">
                             <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                <g>
                                   <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                </g>
                             </svg>
                             <div class="ms-3">
                                <span class="text-gray">Accessories</span>
                                <h6>176K</h6>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-12 col-xl-6">
              <div class="card" data-aos="fade-up" data-aos-delay="1000">
                 <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Conversions</h4>            
                    </div>
                    <div class="dropdown">
                       <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                          This Week
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                          <li><a class="dropdown-item" href="#">This Week</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="card-body">
                    <div id="d-activity" class="d-activity"></div>
                 </div>
              </div>
           </div>         
           
        </div>
     </div>
     
     <div class="col-md-12 col-lg-4">
        <div class="row">
              <div class="card" data-aos="fade-up" data-aos-delay="500">
                 <div class="text-center card-body d-flex justify-content-around">
                    <div>
                       <h2 class="mb-2">750<small>K</small></h2>
                       <p class="mb-0 text-gray">Website Visitors</p>
                    </div>
                    <hr class="hr-vertial">
                    <div>
                       <h2 class="mb-2">7,500</h2>
                       <p class="mb-0 text-gray">New Customers</p>
                    </div>
                 </div>
              </div> 
           </div>
           <div class="col-md-12 col-lg-12">
              <div class="card" data-aos="fade-up" data-aos-delay="600">
                 <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="mb-2 card-title">Latest Requests</h4>
                    </div>
                 </div>
                 <div class="card-body">

                  @foreach ($data['latest'] as $request)
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">{{ $request->title }}</h6>
                        <span class="mb-0">{{ $request->created_at->translatedFormat('j F Y') }}</span>
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