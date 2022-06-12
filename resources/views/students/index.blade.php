@extends('layouts.app')
@section('title','Students')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2 class="text-dark text-uppercase">Create Students
                    <button class="submit btn btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#Create-student">New student</button>
                </h2>
            </div>
        </div>
        @include('students.create')
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Subject</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Seyh Vorn</td>
                <td>22</td>
                <td>Computer Science</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
