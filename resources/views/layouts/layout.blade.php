<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name', 'Laravel') }}</title>
    @yield('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/stylehome.css') }}">
    <script src="https://kit.fontawesome.com/2b9a291b91.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2b9a291b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Woza-Woza-Kota-Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'trebuchet MS', sans-serif;
        }

        .btnmen {
            background-color: #212121;
            color: #faf9f6;
            padding: 8px;
            border: none;
            border-radius: 5px;
            width: 150px;
        }
    </style>
</head>

<body class="bg-[#abdbe3] h-fit">
    @include('include.navbar')

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

    @yield('main')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    @include('include.footer')

</body>

<script src="{{ asset('main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("li").attr("data-id"),
                quantity: ele.parents("li").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function(e) {
        e.preventDefault();

        var ele = $(this);


        $.ajax({
            url: '{{ route('remove_from_cart') }}',
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("li").attr("data-id")
            },
            success: function(response) {
                window.location.reload();
            }
        });

    });
</script>

</html>
