@extends('layouts.app')
@section('content')
    <div class="container-fluid m-auto">
        <table class="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>User</td>
                    <td>Phone Number</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Seyha</td>
                    <td>Vorn</td>
                    <td>098 777 23323</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        const myData = 'Hello';
        console.log(myData);
    </script>
@endpush
