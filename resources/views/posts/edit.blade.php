@extends('layouts.app')
@section('title',"EDIT")
@section('content')
    <div class="tw-container tw-w-6/12 tw-m-auto tw-mt-6">
        <h2 class="tw-mb-6">New Post</h2>
        <form action="" method="Post">
            @csrf
            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="text" name="title" value="{{$post->title}}"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer">
                <label for="floating_title"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Title</label>
            </div>
            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="text" name="slug" id="floating_slug" value="{{$post->slug}}"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer">
                <label for="slug"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Slug</label>
            </div>

            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="text" name="like" id="like" value="{{$post->like}}"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer"
                >
                <label for="like"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Like</label>
            </div>
            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="text" name="content" id="content" value="{{$post->content}}"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer"
                >
                <label for="content"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Content</label>
            </div>

            <button type="submit"
                    class="tw-text-white tw-bg-blue-700 hover:tw-bg-blue-800 focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-blue-300 tw-font-medium tw-rounded-lg tw-text-sm w-full sm:tw-w-auto tw-px-5 tw-py-2.5 tw-text-center dark:tw-bg-blue-600 dark:hover:tw-bg-blue-700 dark:focus:tw-ring-blue-800 tw-float-right">
                Submit
            </button>
        </form>
    </div>
@endsection

