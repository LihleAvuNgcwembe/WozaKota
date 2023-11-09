@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/contactform.css') }}">
@endsection
@section('main')
    <section class="bg-white dark:bg-gray-900 bg-cover pt-7"
        style="background-image: url({{ asset('assets/img/rm222-mind-14.jpg') }});">

        @if (session('success'))
            <div class="container mx-auto">
                <div id="alert-3"class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <div class="ml-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>

                </div>
            </div>
        @endif

        <div class="containerContactForm mx-auto">
            <header>Send Us A Message</header>
            <form action="{{ route('contact-store') }}" method="POST">
                @csrf
                <div class="fields">
                    <div class="inner-field">
                        <input type="text" placeholder="Enter Your Name" name="name"
                            {{ $errors->has('name') ? 'error' : '' }} value="{{ old('name') }}">
                        <i class='bx bx-user'></i>

                        <!---Error --->
                        @if ($errors->has('name'))
                            <div style="color: red;">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="inner-field">
                        <input type="email" placeholder="Enter Your Email" name="email"
                            {{ $errors->has('email') ? 'error' : '' }} value="{{ old('email') }}">
                        <i class='bx bx-envelope'></i>

                        <!---Error --->
                        @if ($errors->has('email'))
                            <div style="color: red;">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="fields">
                    <div class="inner-field">
                        <input type="text" placeholder="Enter Your Phone Number" name="phone"
                            {{ $errors->has('phone') ? 'error' : '' }} value="{{ old('phone') }}">
                        <i class='bx bxs-phone'></i>

                        <!---Error --->
                        @if ($errors->has('phone'))
                            <div style="color: red;">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div class="inner-field">
                        <input type="text" placeholder="Reason For Message" name="subject"
                            {{ $errors->has('subject') ? 'error' : '' }} value="{{ old('subjcet') }}">
                        <i class='bx bxs-bell-ring'></i>

                        <!---Error --->
                        @if ($errors->has('subject'))
                            <div style="color: red;">
                                {{ $errors->first('subject') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="message">
                    <textarea placeholder="Write your message" name="message" {{ $errors->has('message') ? 'error' : '' }}
                        value="{{ old('message') }}"></textarea>
                    <i class='bx bxs-message-dots'></i>

                    <!---Error --->
                    @if ($errors->has('message'))
                        <div style="color: red;">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
                <div class="button-area text-center pb-7">
                    <button type="submit">Send Message</button>
                    <span>Processing your message, give us a moment.</span>
                </div>
            </form>

        </div>
        <!--<script src="{{ asset('assets/js/contactform.js') }}"></script>-->

        <div class="container px-6 py-12 mx-auto">
            <div class="text-center">
                <h2 class=" font-bold text-white text-6xl dark:text-blue-400">Contact us </h2>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>

                <p class="mt-3 text-gray-500 dark:text-gray-400">We are ready to chat</p>
            </div>

            <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Email</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">You can communicate with us via email.</p>
                    <p class="mt-2 text-blue-800  dark:text-blue-400">wozawozakotaplace@gmail.com</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Location</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Find us Here</p>
                    <p class="mt-2 text-blue-800 dark:text-blue-400">ridge road, glen austin midrand</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">From Monday to Friday</p>
                    <p class="mt-2 text-blue-800 dark:text-blue-400">070 6008 6754</p>
                </div>
            </div>
        </div>
    </section>
@endsection
