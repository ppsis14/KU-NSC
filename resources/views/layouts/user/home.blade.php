@extends('layouts.user.user-master')
@section('title-page', 'User Home')
@section('header')
    <i class="pe-7s-home"></i>&nbsp;&nbsp;Home
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <br>
                    <div class="content">
                        <div class="author">
                             <a href="#">
                            <img class="avatar border-gray" src="{{ $profile->avatar }}" alt="..."/>
                                <br>
                              <h4 class="title">{{ Auth::user()->username }}<br /><br>
                                 <small>{{ Auth::user()->name }}</small>
                              </h4>
                            </a>
                        </div><br>
                        <div class="container-fluid">
                            <p class="description text-center"> {{ $profile->bio }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fas fa-envelope"></i></button> <span>{{ Auth::user()->email }}</span>
                    </div>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fas fa-envelope"></i></button> <span>{{ $profile->facebook }}</span>
                    </div>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fas fa-envelope"></i></button> <span>{{ $profile->instagram }}</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-black" style="padding: 30px;" align="center" >
                  <div class="card-header"><h2 class="card-title">Posts</h2></div>
                  <div class="card-body">
                    <p class="card-text"><h3>3</h3></p>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-black" style="padding: 30px;" align="center" >
                  <div class="card-header"><h2 class="card-title">Download</h2></div>
                  <div class="card-body">
                    <p class="card-text"><h3>22</h3></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

            $('#home').addClass('active');

        });
    </script>
@endsection
