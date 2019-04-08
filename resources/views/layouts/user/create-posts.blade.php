@extends('layouts.user.user-master')
@section('title-page', 'User Create Post')
@section('header', 'Create New Post')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create New Post</h4>
                    </div>
                    <div class="content">
                        <form>
                            <h5>Information</h5><hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>title</label>
                                        <input rows="5" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>description</label>
                                        <textarea rows="3" class="form-control" placeholder="Here can be your description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <h5>Contact</h5><hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input type="facebook" class="form-control" placeholder="Facebook">
                                    </div>
                                </div>
                            </div>
                            <h5>Upload Files</h5><hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <form>
                                      <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                      <label class="form-check-label" for="exampleRadios1">
                                        Free Download
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                      <label class="form-check-label" for="exampleRadios2">
                                        Sale
                                      </label>
                                  </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Create Post</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
