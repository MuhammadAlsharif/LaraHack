@extends('layouts.default')
@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/button.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('datepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="home-title">

            <div class="row not-typed">
                <div class="col-12">
                    <img class="logo-img" src="{{asset('images/LOGO.png')}}" alt="CSE">
                </div>
            </div>

            <div class="row justify-content-center come">
                <span>Challenge yourself and register in Hack!T ! <br>A few Steps from the biggest student hackathon .</span>
            </div>
            <div class="row justify-content-center">
                <button id="go-ahead" class="custom-button"> Go Ahead !</button>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="registrationDone" class="come">
                        <p id="statement"></p>
                </div>
                <form id="register" method="POST">
                    @csrf
                    <div class="formi col-lg-12">
                        <label class="labeli" for="first_name">What's your first name ?</label>
                        <input type="text" class="inputi" id="first_name" name="first_name"
                               placeholder="Your name here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="last_name">What's your last name ?</label>
                        <input type="text" class="inputi" id="last_name" name="last_name"
                               placeholder="Your last name here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="email">What's your email adress ?</label>
                        <input type="text" class="inputi" id="email" name="email" placeholder="Your email address here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="birthday">What's your birthday ?</label>
                        <!--<input type="date" class="inputi" id="birthday" name="birthday" placeholder="Birthday*">-->
                        <input id="birthday" name="birthday" type="text" class="inputi datepicker-here" data-language='en'>
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="sex">What's your gender ?</label>
                        <select class="inputi" id="sex" name="sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="phone">What's your phone number ?</label>
                        <input type="text" class="inputi" id="phone" name="phone" placeholder="Your phone number here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="motivation">Why do you want to participate in hackIT?</label>
                        <textarea type="text" rows=6 class="inputi" id="motivation" name="motivation"
                                  placeholder="Motivation"></textarea>
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="github">We need you github !</label>
                        <input type="text" class="inputi" id="github" name="github"
                               placeholder="your github profile's link here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="linked_in">And your linkedIn too !</label>
                        <input type="text" class="inputi" id="linked_in" name="linked_in"
                               placeholder="your linkedIn profile's link here">
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-12">
                        <label class="labeli" for="skills">What about your skills ?</label>
                        <textarea rows=6 type="text" class="inputi" id="skills" name="skills"
                                  placeholder="Skills"></textarea>
                        <div class="separator"></div>
                    </div>

                    <div class="formi col-lg-8">
                        <label class="labeli" for="size">You want a t-shirt right ! which size ?</label>
                        <select class="inputi" id="size" name="size">
                            <option value="XL">XL</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="S">S</option>
                        </select>
                        <div class="separator"></div>
                    </div>

                    <input type="text" hidden id="team_id" name="team_id">
                    <div class="bani col-lg-12">

                        <span class="labeli">Do you have a team ?</span>
                        <div class="row justify-content-between custom-switch">

                            <div class="ui buttons ">
                                <div class="ui positive button" id="yesTeam">Yes</div>
                                <div class="or"></div>
                                <div class="ui negative button" id="noTeam">No</div>
                            </div>
                        </div>
                    </div>

                    <div class="bani col-lg-12" id="createJoin">
                        <span class="labeli">Do you want to create a team or join one ?</span>

                        <div class="row justify-content-between custom-switch">

                            <div class="ui buttons">
                                <div class="ui black button" id="createTeam">Create</div>
                                <div class="or"></div>
                                <div class="ui grey button" id="joinTeam">Join</div>
                            </div>
                        </div>
                    </div>

                    <div class="dicidi col-lg-12" id="teamName" style="padding-bottom: 30px;">
                        <label class="labeli">Team name</label>
                        <input type="text" class="inputi" id="team_name" name="team_name"
                               placeholder="Your team's name here">
                        <div class="separator"></div>
                    </div>
                    <div class="dicidi col-lg-12" id="teamCode">
                        <label class="labeli">Team's code</label>
                        <div class="checkDiv">
                            <input type="text" class="inputi checkInput" id="team_code"
                                   placeholder="Your team's code here to check it ...">
                            <button class="custom-button checkButton" id="check" type="button"><i
                                        class="fa fa-check-circle" aria-hidden="true"></i>Check
                            </button>
                        </div>
                        <div class="separator"></div>
                        <div>
                            <p id="checkResult"></p>
                        </div>
                    </div>

                    <div class="dicidi col-lg-12" id="sub">
                        <button class="custom-button" id="submitButton">Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js"></script> --}}
    <script src="{{asset('datepicker/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('datepicker/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{asset('js/register.js')}}"></script>
    <script src="{{asset('js/api.js')}}"></script>
    <script src="{{asset('js/typeform.js')}}"></script>
    <script src="{{asset('js/validate.js')}}"></script>
@endsection