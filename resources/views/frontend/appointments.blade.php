@extends('frontend.layouts.master')

@section('content')

    @php
    $schedules_monday = App\Schedule::where('day', '1')
        ->orderBy('start_time')
        ->get();
    $schedules_tuesday = App\Schedule::where('day', '2')
        ->orderBy('start_time')
        ->get();
    $schedules_wednesday = App\Schedule::where('day', '3')
        ->orderBy('start_time')
        ->get();
    $schedules_friday = App\Schedule::where('day', '5')
        ->orderBy('start_time')
        ->get();
    $schedules_saturday = App\Schedule::where('day', '6')
        ->orderBy('start_time')
        ->get();
    $schedules_sunday = App\Schedule::where('day', '7')
        ->orderBy('start_time')
        ->get();
    @endphp
    <!-- ========================
               page title 
            =========================== -->
    <section class="page-title page-title-layout5">
        <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">Book Appointment</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                 Doctors Timetable
              ========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center">Doctor's Time Table</h5>
                    <div class="table-responsive">
                        <table class="doctors-timetable w-100">
                            <thead>
                                <tr class="">
                                    <th></th>
                                    <th>Morning</th>
                                    <th>Mid Day</th>
                                    <th>Noon</th>
                                    <th>Afternoon</th>
                                    <th>Evening</th>
                                    <th>Night</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Sunday
                                    </td>
                                    @foreach ($schedules_sunday as $schedule_sunday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_sunday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_sunday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_sunday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_sunday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        Monday
                                    </td>
                                    @foreach ($schedules_monday as $schedule_monday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_monday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_monday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_monday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_monday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        Tuesday
                                    </td>
                                    @foreach ($schedules_tuesday as $schedule_tuesday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_tuesday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_tuesday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_tuesday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_tuesday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        Wednesday
                                    </td>
                                    @foreach ($schedules_wednesday as $schedule_wednesday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_wednesday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_wednesday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_wednesday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_wednesday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        Friday
                                    </td>
                                    @foreach ($schedules_friday as $schedule_friday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_friday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_friday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_friday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_friday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        Saturday
                                    </td>
                                    @foreach ($schedules_saturday as $schedule_saturday)
                                        @php
                                            $doctor = App\Doctor::where('id', $schedule_saturday->doctor_id)->first();
                                        @endphp
                                        <td class="event">
                                            <div class="doctor__name">{{ $doctor->name }}
                                                <p>({{ $doctor->spec }}) <br>
                                                    <span>{{ substr($schedule_saturday->start_time, 0, -3) }} -
                                                        {{ substr($schedule_saturday->end_time, 0, -3) }}</span>
                                                </p>
                                                <span><a href="{{route('apps.add',$schedule_saturday->id)}}">Book Appointment</a></span>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Doctors Timetable  -->

    <!-- ==========================
                contact layout 2
            =========================== -->
  
@endsection
