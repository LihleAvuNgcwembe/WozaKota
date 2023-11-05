<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Contact Form</title>
    <link rel="stylesheet" href="{{asset('assets/css/contactform.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
   
    <div class="container">
        <header>Send Us A Message</header>
        <form action="{{route('contact-store')}}" method="POST">
            @csrf
            <div class="fields">
                <div class="inner-field">
                    <input type="text" placeholder="Enter Your Name" name="name"
                    {{$errors->has('name')?'error': ''}}>
                    <i class='bx bx-user'></i>

                    <!---Error --->
                    @if ($errors->has('name'))
                    <div class="error">
                        {{$errors->first('name')}}
                    </div>  
                    @endif
                </div>
                <div class="inner-field">
                    <input type="email" placeholder="Enter Your Email" name="email"
                    {{$errors->has('email')?'error': ''}}>
                    <i class='bx bx-envelope'></i>

                    <!---Error --->
                    @if ($errors->has('email'))
                    <div class="error">
                        {{$errors->first('email')}}
                    </div>  
                    @endif
                </div>
            </div>
            <div class="fields">
                <div class="inner-field">
                    <input type="text" placeholder="Enter Your Phone Number" name="phone"
                    {{$errors->has('phone')?'error': ''}}>
                    <i class='bx bxs-phone'></i>

                    <!---Error --->
                    @if ($errors->has('email'))
                    <div class="error">
                        {{$errors->first('email')}}
                    </div>  
                    @endif
                </div>
                <div class="inner-field">
                    <input type="text" placeholder="Reason For Message" name="subject"
                    {{$errors->has('subject')?'error': ''}}>
                    <i class='bx bxs-bell-ring'></i>

                    <!---Error --->
                    @if ($errors->has('email'))
                    <div class="error">
                        {{$errors->first('email')}}
                    </div>  
                    @endif
                </div>
            </div>
            <div class="message">
                <textarea placeholder="Write your message" name="message"
                {{$errors->has('message')?'error': ''}}></textarea>
                <i class='bx bxs-message-dots'></i>

                <!---Error --->
                @if ($errors->has('email'))
                <div class="error">
                    {{$errors->first('email')}}
                </div>  
                @endif
            </div>
            <div class="button-area">
                <button type="submit">Send Message</button>
                <span>Processing your message, give us a moment.</span>
            </div>
        </form>
       
    </div>
    <!--<script src="{{asset('assets/js/contactform.js')}}"></script>-->
</body>
</html>