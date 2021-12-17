@extends('frontend.layouts.master')
@section('content')

    <section class="contact-layout2 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="contact-panel__form" method="post" action="{{ route('apps.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Book An Appointment</h4>
                                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                        reception staff
                                        with any general or medical enquiry. Our doctors will receive or return any urgent
                                        calls.
                                    </p>
                                </div>
                                @php
                                    $schedule = App\Schedule::where('id', $schedule_id->id)->first();
                                    $doctor = App\Doctor::where('id', $schedule_id->doctor_id)->first();
                                    //next sunday
                                    $nextSunday = strtotime('next sunday');
                                    $weekNoNextSunday = date('Y-m-d', $nextSunday);
                                    //next monday
                                    $nextMonday = strtotime('next monday');
                                    $weekNoNextMonday = date('Y-m-d', $nextMonday);
                                    //next tuesday
                                    $nextTuesday = strtotime('next tuesday');
                                    $weekNoNextTuesday = date('Y-m-d', $nextTuesday);
                                    //next wednesday
                                    $nextWednesday = strtotime('next wednesday');
                                    $weekNoNextWednesday = date('Y-m-d', $nextWednesday);
                                    //next friday
                                    $nextFriday = strtotime('next friday');
                                    $weekNoNextFriday = date('Y-m-d', $nextFriday);
                                    //next saturday
                                    $nextSaturday = strtotime('next saturday');
                                    $weekNoNextSaturday = date('Y-m-d', $nextSaturday);
                                    
                                    //this sunday
                                    $thisSunday = strtotime('this sunday');
                                    $weekNothisSunday = date('l', $thisSunday);
                                    //this monday
                                    $thisMonday = strtotime('this monday');
                                    $weekNothisMonday = date('l', $thisMonday);
                                    //this tuesday
                                    $thisTuesday = strtotime('this tuesday');
                                    $weekNothisTuesday = date('l', $thisTuesday);
                                    //this wednesday
                                    $thisWednesday = strtotime('this wednesday');
                                    $weekNothisWednesday = date('l', $thisWednesday);
                                    //this friday
                                    $thisFriday = strtotime('this friday');
                                    $weekNothisFriday = date('l', $thisFriday);
                                    //this saturday
                                    $thisSaturday = strtotime('this saturday');
                                    $weekNothisSaturday = date('l', $thisSaturday);
                                    
                                    $today_week = date('l');
                                    
                                @endphp
                                <div class="col-lg-12">
                                    @if ($schedule_id->day == "1" )
                                         
                                         {{ $date = $weekNoNextMonday}}    

                                    @elseif($schedule_id->day == "2" )

                                         {{$date = $weekNoNextTuesday}}  

                                    @elseif($schedule_id->day == "3" )
                                      
                                         {{ $date = $weekNoNextWednesday}}

                                    @elseif($schedule_id->day == "5" )
                                          
                                         {{ $date = $weekNoNextFriday}}

                                    @elseif($schedule_id->day == "6" )
                                          
                                         {{ $date = $weekNoNextSaturday}}

                                    @elseif($schedule_id->day == "7" )

                                         {{ $date = $weekNoNextSunday}}
                                         
                                    @else
                                    No Date Found..
                                    @endif  
                                </div>
{{--                                     
                                <input type="text" name="date"  value="{{$date}}"> --}}
                                <input type="hidden" name="schedule_id" value="{{$schedule_id->id}}">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Name" 
                                            name="patient_name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email"
                                            name="patient_email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Phone"
                                            name="patient_mobile" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->

                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                        <div
                            class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                            <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                            <div>
                                <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                                <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                    contact our
                                    friendly staff with any medical enquiry.
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002)
                                            01061245741</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00
                                            pm</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->
@endsection
