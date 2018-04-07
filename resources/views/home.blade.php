@extends('layouts.master')    

@section('content')
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center" id="what">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">What</h2>
                        <h5 class="description">
A barebones CMS based upon a RESTful API. Meant to be reuse with easy. 
                        </h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">weekend</i>
                                </div>
                                <h4 class="info-title">Simple</h4>
                                <p>Made to be downloaded, installed and ready to use.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">folder</i>
                                </div>
                                <h4 class="info-title">Resource ready</h4>
                                <p>Provides with the most common resources such as post, image, video and other media.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">pie_chart</i>
                                </div>
                                <h4 class="info-title">Statistics Available</h4>
                                <p>A convenient dashboard complements such resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--
            <div class="section text-center">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="../assets/img/kit/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Gigi Hadid
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="../assets/img/kit/faces/christian.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Christian Louboutin
                                        <br>
                                        <small class="card-description text-muted">Designer</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="../assets/img/kit/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Kendall Jenner
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}


            <div class="section section-contacts" id="why">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Why</h2>
                        <h4 class="text-center description">To serve as a complementary package to small to middle size projects or as basis for further developments. Either way, to save you time and effort.</h4>

                    </div>
                </div>
            </div>

            <div class="section section-contacts" id="when">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">When</h2>
                        <h4 class="text-center description">Developments are sporadical and conditioned by the by-project emerging needs. Here's where your input becomes critical! Drop by <a href="#contact">some lines</a> indicating what would you find useful or <a href="https://github.com/richardtrujillotorres/lacms-api">follow the repo</a> to keep up with the developments.<br>Your feedback will be much appreciated!</h4>

                    </div>
                </div>
            </div>


            {{--<div class="section section-contacts" id="contact">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Tell me what you think!</h2>
                        <h4 class="text-center description">The fellow developer is the core focus of this project. <br>Whether you have some features in mind you would like to see come to life or any query regarding the project, go ahead and drop me some lines.</h4>

                        <form class="contact-form" method="POST" action="{{ route('contacts.message') }}">
                            {{ csrf_field() }}

                            <div class="row">

                                <!-- name -->
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" class="form-control" 
                                            value="{{ old('name') }}" 
                                            required>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="bmd-label-floating">Email*</label>
                                        <input type="email" name="email" class="form-control" 
                                            value="{{ old('email') }}" 
                                            required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                            </div>

                            <!-- message -->
                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="message" class="bmd-label-floating">Message*</label>
                                <textarea type="text" class="form-control" rows="4" 
                                        value="{{ old('text') }}" 
                                        name="message" 
                                        id="message" required>
                                </textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-primary btn-raised" type="submit">
                                        Send It
                                    </button>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <p>Field marked with an asterisk are mandatory.</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>--}}



        </div>
    </div>

@endsection
