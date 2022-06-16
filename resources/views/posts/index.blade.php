@extends('layouts.app')
@section('title','Posts')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-dark text-uppercase">Create Students
                    <button class="submit btn btn-info btn-sm float-end" data-bs-toggle="modal"
                            data-bs-target="#Create-student">New student
                    </button>
                </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>@lang('message.id')</th>
                        <th>{{trans('message.title')}}</th>
                        <th>Content</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                    @foreach($post as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{ date('F d Y', strtotime($post->created_at)) }}</td>
                            <td>{{ date('d F Y', strtotime($post->updated_at)) }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection


