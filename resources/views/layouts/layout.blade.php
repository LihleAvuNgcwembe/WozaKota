<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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

<body class="bg-[#abdbe3]">
    @include('include.navbar')

    @if (session('success'))
        <div class="container mx-auto">
            <div id="alert-3"class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <div class="ml-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @yield('main')

    @include('include.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
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
