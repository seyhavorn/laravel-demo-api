@extends('layouts.app')
@section('title','Posts')
@section('content')
    <div class="container-fluid tw-mt-3">
        <table class="tw-w-full tw-text-sm tw-text-left tw-text-gray-500 dark:tw-text-gray-400">
            <thead
                class="tw-text-xs tw-text-gray-700 tw-uppercase tw-bg-gray-50 dark:tw-bg-gray-700 dark:tw-text-gray-400">
            <tr>
                <th scope="col" class="tw-px-6 tw-py-3">{{trans('message.id')}}</th>
                <th scope="col" class="tw-px-6 tw-py-3">{{trans('message.title')}}</th>
                <th scope="col" class="tw-px-6 tw-py-3">Slug</th>
                <th scope="col" class="tw-px-6 tw-py-3">Like</th>
                <th scope="col" class="tw-px-6 tw-py-3">Content</th>
                <th scope="col" class="tw-px-6 tw-py-3">Created At</th>
                <th scope="col" class="tw-px-6 tw-py-3">Update At</th>
                <th scope="col" class="tw-px-6 tw-py-3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr class="tw-bg-white tw-border-b dark:tw-bg-gray-800 dark:tw-border-y-gray-600">
                    <th scope="row"
                        class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-700 dark:tw-ext-white tw-whitespace-nowrap">{{$post->id}}</th>
                    <td class="tw-px-6 tw-py-4">{{$post->title}}</td>
                    <td class="tw-px-6 tw-py-4">{{$post->slug}}</td>
                    <td class="tw-px-6 tw-py-4">{{$post->like}}</td>
                    <td class="tw-px-6 tw-py-4">{{$post->content}}</td>
                    <td class="tw-px-6 tw-py-4">{{$post->created_at}}</td>
                    <td class="tw-px-6 tw-py-4">{{$post->updated_at}}</td>
                    <td class="tw-px-6 tw-py-4 tw-text-right">
                        <a href="#" class="tw-font-medium tw-text-blue-600 dark:tw-text-blue-500 hover:tw-underline">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


