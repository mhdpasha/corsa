@extends('templates.main')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Ongoing Requests</h4>
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
                                <div id="calendar1" class="calendar-s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- Fullcalender CSS -->
  <link rel='stylesheet' href='../../assets/vendor/fullcalendar/core/main.css' />
  <link rel='stylesheet' href='../../assets/vendor/fullcalendar/daygrid/main.css' />
  <link rel='stylesheet' href='../../assets/vendor/fullcalendar/timegrid/main.css' />
  <link rel='stylesheet' href='../../assets/vendor/fullcalendar/list/main.css' />

  <!-- Fullcalender Javascript -->
  <script src='../../assets/vendor/fullcalendar/core/main.js'></script>
  <script src='../../assets/vendor/fullcalendar/daygrid/main.js'></script>
  <script src='../../assets/vendor/fullcalendar/timegrid/main.js'></script>
  <script src='../../assets/vendor/fullcalendar/list/main.js'></script>
  <script src='../../assets/vendor/fullcalendar/interaction/main.js'></script>
  <script src='../../assets/vendor/moment.min.js'></script>
  <script type="module">
  let data = `{!! json_encode($datas) !!}`;
console.log(data); // This will now log the parsed JSON data

if (document.querySelectorAll('#calendar1').length) {
  document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar1');
    let calendar1 = new FullCalendar.Calendar(calendarEl, {
      selectable: true,
      plugins: ["timeGrid", "dayGrid", "list", "interaction"],
      timeZone: "UTC",
      defaultView: "dayGridMonth",
      contentHeight: "auto",
      eventLimit: true,
      dayMaxEvents: 4,
      header: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek"
      },
      dateClick: function (info) {
        $('#schedule-start-date').val(info.dateStr)
        $('#schedule-end-date').val(info.dateStr)
        $('#date-event').modal('show')
      },
      events: data.length > 0 ? JSON.parse(data).map(data => ({ // Check if data exists
        title: data.title,
        url: `/requests/${data.slug}`,
        start: data.created_at,
        backgroundColor: "rgba(58,87,232,0.2)",
        textColor: "rgba(58,87,232,1)",
        borderColor: "rgba(58,87,232,1)"
      })) : [] 
    });
    calendar1.render();
  });
}

  </script>
@endsection