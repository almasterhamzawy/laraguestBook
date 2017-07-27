@extends('admin.main')

@section('content')

            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1>Update Message</h1>
                    </div>

                </div>
                <div class="col-md-8">
                    <form class="form-horizontal" action="{{url('admin/messages/update')}}" method="post">

                        <div class="form-group">
                            <label for="full-name" class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value="{{$message->title}}" class="form-control" id="full-name" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full-name" class="col-sm-3 control-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" id="full-name" placeholder="Full Name">{{$message->content}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email-address" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" value="{{$message->name}}" id="email-address" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" value="{{$message->email}}" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="hidden" name="id" value="{{$message->id}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="btn btn-success"><i class="fa fa-user"></i> Update Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@stop
