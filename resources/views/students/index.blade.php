@extends('layouts.app')
@section('title','Students')
@section('content')
    <div class="tw-container tw-relative tw-overflow-x-auto sm:tw-rounded-lg">
        <div class="tw-flex tw-justify-between tw-align-middle tw-my-2">
            <h1 class="tw-text-gray-900-300 tw-font-bold tw-text-2xl">List Students</h1>
            <button
                class="tw-mr-3 tw-block tw-text-white tw-bg-blue-700 hover:tw-bg-blue-800 focus:tw-outline-none focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-blue-300 tw-font-medium tw-rounded-lg tw-text-sm tw-px-4 tw-py-2 tw-text-center dark:tw-bg-blue-600 dark:hover:tw-bg-blue-700 dark:focus:tw-ring-blue-800"
                type="button" data-modal-toggle="defaultModal">
                Create Student
            </button>
            @include('students.create')
        </div>
        <table class="tw-w-full tw-text-sm tw-text-left tw-text-gray-500 dark:tw-text-gray-400">
            <thead
                class="tw-text-xs tw-text-gray-700 tw-uppercase tw-bg-gray-50 dark:tw-bg-gray-700 dark:tw-text-gray-400">
            <tr>
                <th scope="col" class="tw-px-6 tw-py-3">ID</th>
                <th scope="col" class="tw-px-6 tw-py-3">Name</th>
                <th scope="col" class="tw-px-6 tw-py-3">Email</th>
                <th scope="col" class="tw-px-6 tw-py-3">Age</th>
                <th scope="col" class="tw-px-6 tw-py-3">Subject</th>
                <th scope="col" class="tw-px-6 tw-py-3">Created At</th>
                <th scope="col" class="tw-px-6 tw-py-3">Update At</th>
                <th scope="col" class="tw-px-6 tw-py-3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student as $student)
                <tr class="tw-bg-white tw-border-b dark:tw-bg-gray-800 dark:tw-border-y-gray-600">
                    <th scope="row"
                        class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-700 dark:tw-ext-white tw-whitespace-nowrap">{{$student->id}}</th>
                    <td class="tw-px-6 tw-py-4">{{$student->name}}</td>
                    <td class="tw-px-6 tw-py-4">{{$student->email}}</td>
                    <td class="tw-px-6 tw-py-4">{{$student->age}}</td>
                    <td class="tw-px-6 tw-py-4">{{$student->subject}}</td>
                    <td class="tw-px-6 tw-py-4">{{$student->created_at}}</td>
                    <td class="tw-px-6 tw-py-4">{{$student->updated_at}}</td>
                    <td class="tw-px-6 tw-py-4 tw-text-right">
                        <a href="#" class="tw-font-medium tw-text-blue-600 dark:tw-text-blue-500 hover:tw-underline">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--    Pop Up Model--}}
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
         class="tw-hidden tw-overflow-y-auto tw-overflow-x-hidden tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-z-50 tw-w-full md:tw-inset-0 tw-h-modal md:tw-h-full tw-justify-center tw-items-center">
        <div class="tw-relative tw-p-4 tw-w-full tw-max-w-2xl tw-h-full md:tw-h-auto">
            <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow dark:tw-bg-gray-700">
                <div
                    class="tw-flex tw-justify-between tw-items-start tw-p-4 tw-rounded-t tw-border-b dark:tw-border-gray-600">
                    <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white">
                        Terms of Service
                    </h3>
                    <button type="button"
                            class="tw-text-gray-400 tw-bg-transparent hover:tw-bg-gray-200 hover:tw-text-gray-900 tw-rounded-lg tw-text-sm tw-p-1.5 tw-ml-auto tw-inline-flex tw-items-center dark:hover:tw-bg-gray-600 dark:hover:tw-text-white"
                            data-modal-toggle="defaultModal">
                        <svg class="tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="tw-p-6 tw-space-y-6">
                    <p class="tw-text-base tw-leading-relaxed tw-text-gray-500 dark:tw-text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="tw-text-base tw-leading-relaxed tw-text-gray-500 dark:tw-text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25
                        and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>

                <div
                    class="tw-flex tw-items-center tw-p-6 tw-space-x-2 tw-rounded-b tw-border-t tw-border-gray-200 dark:tw-border-gray-600">
                    <button data-modal-toggle="defaultModal" type="button"
                            class="tw-text-white tw-bg-blue-700 hover:tw-bg-blue-800 focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-blue-300 tw-font-medium tw-rounded-lg tw-text-sm tw-px-5 tw-py-2.5 tw-text-center dark:tw-bg-blue-600 dark:hover:tw-bg-blue-700 dark:focus:tw-ring-blue-800">
                        I accept
                    </button>
                    <button data-modal-toggle="defaultModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Decline
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection


