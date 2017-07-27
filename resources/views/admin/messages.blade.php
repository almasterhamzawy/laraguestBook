@extends('admin.main')

@section('content')

<div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1>All Messages</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover table-bordered table-content">
                        <thead>
                            <tr>
                                <th width="150px">Message Title</th>
                                <th>Message Content</th>
                                <th width="150px">Writer Name</th>
                                <th>Writer Email</th>
                                <th width="150px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                                <tr>
                                    <td>{{$message->title}}</td>
                                    <td>{{$message->content}}.</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>
                                        <a href="{{url('admin/messages/update/'.$message->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{url('admin/messages/delete/'.$message->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@stop