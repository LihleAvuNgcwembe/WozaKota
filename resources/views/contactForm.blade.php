@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/contactform.css')}}">
@endsection
@section('main')
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

    <div class="containerContactForm mx-auto mt-7">
        <header>Send Us A Message</header>
        <form action="{{ route('contact-store') }}" method="POST">
            @csrf
            <div class="fields">
                <div class="inner-field">
                    <input type="text" placeholder="Enter Your Name" name="name" {{ $errors->has('name') ? 'error' : '' }}
                        value="{{ old('name') }}">
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
@endsection
