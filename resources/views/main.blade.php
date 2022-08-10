@extends('layouts.app')
@section('title','main')
@section('content')
    <div class="container-fluid m-auto">
        <h1 class="tw-text-dark tw-font-bold tw-text-xl">Home Page</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem commodi corporis debitis
            distinctio ea itaque molestiae neque unde, voluptas! A delectus, doloremque expedita modi nam obcaecati
            possimus saepe vitae!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet cupiditate
            dicta distinctio doloribus eaque enim ex facere, facilis fugit harum illum neque nesciunt quia quos, sunt
            temporibus ut voluptatibus.
        </p>
        <button type="submit" class="tw-rounded-full tw-text-white tw-bg-dark tw-px-4 tw-py-2" id="test"
                onclick="changeText()">Save
        </button>
    </div>
@endsection
@push('scripts')
    <script>
        const testBtn = document.getElementById('test');
        function changeText() {
            testBtn.innerText = "Saved";
        }
    </script>
@endpush
