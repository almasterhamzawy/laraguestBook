@extends('front.main')

@section('content')

  <div class="content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header">
                            <h1>Guest Book</h1>
                        </div>
                        <div class="row guestbook">
                            <div class="col-md-12">


                                <?php $message = session('message'); ?>
                                @if(strlen($message)>0)
                                    <div class="alert alert-success">
                                        <p>{{$message}}</p>
                                    </div>
                                @endif

                                <?php $errors = session('errors'); ?>
                                @if(isset($errors) && is_array($errors) && count($errors)>0)
                                    <div class="alert alert-danger">
                                        @foreach($errors as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    </div>
                                @endif

                            @foreach($messages as $message)
                                <div class="panel panel-default panel-guestbook">
                                    <div class="panel-heading">
                                        <div class="guestbook__title">{{$message->title}}</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="guestbook__text">{{$message->content}}.</div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="guestbook__writer"><strong>Added By:</strong> {{$message->name}}</div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="col-md-12">
                                <br /><br />
                            </div>
                            <div class="col-md-12">
                                <div class="section-header">
                                    <h1>Add new message</h1>
                                </div>
                                <form class="form-horizontal" action="{{url('messages/add')}}" method="post">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Message Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Message Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="col-sm-3 control-label">Message Content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="content" rows="6" id="content" placeholder="Message Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Your Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Your Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-comments"></i> Add Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop