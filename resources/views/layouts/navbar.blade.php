<nav class="tw-bg-dark tw-border-gray-200 tw-px-2 sm:tw-px-4 tw-py-2.5  dark:tw-bg-dark">
    <div class="tw-container tw-flex tw-flex-wrap tw-justify-between tw-items-center tw-mx-auto">
        <a href="{{route('home.index')}}" class="tw-flex tw-items-center">
            <span
                class="tw-self-center tw-text-xl tw-font-semibold tw-whitespace-nowrap tw-text-white">LaravelMaster</span>
        </a>
        <div class="tw-flex md:tw-order-2">
            <button type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3"
                    aria-expanded="false"
                    class="md:tw-hidden tw-text-gray-500 dark:tw-text-gray-400 hover:tw-bg-gray-100 dark:hover:tw-bg-gray-700 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-gray-200 dark:focus:tw-ring-gray-700 tw-rounded-lg tw-text-sm tw-p-2.5 tw-mr-1">
                <svg class="tw-w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="tw-hidden tw-relative md:tw-block">
                <div class="tw-flex tw-absolute tw-inset-y-0 tw-left-0 tw-items-center tw-pl-3 tw-pointer-events-none">
                    <svg class="tw-w-5 tw-h-5 tw-text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                       class="tw-block tw-p-2 tw-pl-10 tw-w-full tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-border tw-border-gray-300 sm:tw-text-sm focus:tw-ring-blue-500 focus:tw-border-blue-500 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                       placeholder="Search...">
            </div>
            <button data-collapse-toggle="mobile-menu-3" type="button"
                    class="tw-inline-flex tw-items-center tw-p-2 tw-text-sm tw-text-gray-500 tw-rounded-lg md:tw-hidden hover:tw-bg-gray-100 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-gray-200 dark:tw-text-gray-400 dark:hover:tw-bg-gray-700 dark:focus:tw-ring-gray-600"
                    aria-controls="mobile-menu-3" aria-expanded="false">
                <svg class="tw-w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <svg class="tw-hidden tw-w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="tw-hidden tw-justify-between tw-items-center tw-w-full md:tw-flex md:tw-w-auto md:tw-order-1"
             id="mobile-menu-3">
            <div class="tw-relative tw-mt-3 md:tw-hidden">
                <div class="tw-flex tw-absolute tw-inset-y-0 tw-left-0 tw-items-center tw-pl-3 tw-pointer-events-none">
                    <svg class="tw-w-5 h-5 tw-text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                       class="tw-block tw-p-2 tw-pl-10 tw-w-full tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-border tw-border-gray-300 sm:tw-text-sm focus:tw-ring-blue-500 focus:tw-border-blue-500 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                       placeholder="Search...">
            </div>
            <ul class="tw-flex tw-flex-col tw-mt-4 md:tw-flex-row md:tw-space-x-8 md:tw-mt-0 md:tw-text-sm md:tw-font-medium">
                @php
                    $routeName = Route::currentRouteName();
                @endphp
                <li>
                    <a href="{{route('posts.index')}}"
                       class="tw-block tw-py-2 tw-pr-4 tw-pl-3 tw-text-white tw-border-b tw-border-gray-100 hover:tw-bg-gray-50 md:hover:tw-bg-transparent md:tw-border-0 md:hover:tw-text-blue-700 md:tw-p-0 md:dark:hover:tw-text-white dark:tw-text-gray-400 dark:hover:tw-bg-gray-700 dark:hover:tw-text-white md:dark:hover:tw-bg-transparent dark:tw-border-gray-700 {{ $routeName == 'posts.index' ? 'active:tw-bg-blue-300 ' : '' }}"
                    >Post</a>
                </li>
                <li>
                    <a href="{{route('posts.create')}}"
                       class="tw-block tw-py-2 tw-pr-4 tw-pl-3 tw-text-white tw-border-b tw-border-gray-100 hover:tw-bg-gray-50 md:hover:tw-bg-transparent md:tw-border-0 md:hover:tw-text-blue-700 md:tw-p-0 md:dark:hover:tw-text-white dark:tw-text-gray-400 dark:hover:tw-bg-gray-700 dark:hover:tw-text-white md:dark:hover:tw-bg-transparent dark:tw-border-gray-700 {{ $routeName == 'posts.create' ? 'active:tw-bg-blue-300 ' : '' }}"
                    >New Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
