@extends('layouts.app')
@section('content')
    <div class="tw-container tw-w-6/12 tw-m-auto tw-mt-6">
        <h2 class="tw-mb-6">New Student</h2>
        <form>
            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="email" name="floating_email"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer"
                       placeholder=" " required="">
                <label for="floating_email"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Email
                    address</label>
            </div>
            <div class="tw-relative tw-z-0 tw-w-full tw-mb-6 tw-group">
                <input type="password" name="floating_password" id="floating_password"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer"
                       placeholder=" " required="">
                <label for="floating_password"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="repeat_password" id="floating_repeat_password"
                       class="tw-block tw-py-2.5 tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-blue-500 focus:tw-outline-none focus:tw-ring-0 focus:tw-border-blue-600 tw-peer"
                       placeholder=" " required="">
                <label for="floating_repeat_password"
                       class="peer-focus:tw-font-medium tw-absolute tw-text-sm tw-text-gray-500 dark:tw-text-gray-400 tw-duration-300 tw-transform -tw-translate-y-6 tw-scale-75 tw-top-3 -tw-z-10 origin-[0] peer-focus:tw-left-0 peer-focus:tw-text-blue-600 peer-focus:dark:tw-text-blue-500 peer-placeholder-shown:tw-scale-100 peer-placeholder-shown:tw-translate-y-0 peer-focus:tw-scale-75 peer-focus:-tw-tw-translate-y-6">Confirm
                    password</label>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_first_name" id="floating_first_name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required="">
                    <label for="floating_first_name"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                        name</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required="">
                    <label for="floating_last_name"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                        name</label>
                </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required="">
                    <label for="floating_phone"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                        number (123-456-7890)</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_company" id="floating_company"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required="">
                    <label for="floating_company"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company
                        (Ex. Google)</label>
                </div>
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </form>
    </div>
@endsection
