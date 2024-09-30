<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Blogs</title>
</head>
<body class="bg-gray-100">
 <!-- Start of header -->
<header class="bg-blue-600 p-4 text-white flex justify-between items-center">
    <div class="flex items-center space-x-4">
        @if($settings)
        <a href="{{ route('home1') }}">
            <img src="{{ asset($settings->logo) }}" alt="Logo" class="h-16 w-16 rounded-full object-cover">
        </a>
    @endif

      <!-- Align the logo and navigation horizontally in the same line -->
        <div class="flex items-center space-x-6">
            <nav class="flex space-x-6">
                <a href="{{route('home1')}}" class="hover:underline">Home</a>
                <a href="{{route('physics')}}" class="hover:underline">Physics</a>
                <a href="{{route('technology')}}" class="hover:underline">Technology</a>
            </nav>
        </div>
    </div>

    <!-- User logo (Right aligned) -->
    <div class="flex items-center space-x-4">
        @if($settings)
        <a href="#" class="text-white-600 hover:underline">
            {{$settings->email}}
        </a>

        @endif


        <div>
            <a href="{{route('home')}}">
                <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                    alt="User Logo" class="w-12 h-12 rounded-full">
            </a>
        </div>
    </div>


</header>
<!-- End of header -->


   @yield('content')

  <!-- Start of footer -->
<footer class="bg-blue-600 text-white py-8 mt-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="flex space-x-6 mb-4 md:mb-0">
            @if($settings)
                @if($settings->facebook)
                    <a href="{{ $settings->facebook }}" class="hover:text-gray-300">Facebook</a>
                @endif
                @if($settings->linkedin)
                    <a href="{{ $settings->linkedin }}" class="hover:text-gray-300">LinkedIn</a>
                @endif
                @if($settings->twitter)
                    <a href="{{ $settings->twitter }}" class="hover:text-gray-300">Twitter</a>
                @endif
                @if($settings->instagram)
                    <a href="{{ $settings->instagram }}" class="hover:text-gray-300">Instagram</a>
                @endif
                @if($settings->phone)
                <p>{{ $settings->phone }}</p>
            @endif
            @else
                <p>No social links available</p>
            @endif
        </div>
        <form class="flex">
            <input type="email" placeholder="Enter your email" class="p-2 rounded-l-lg">
            <button class="bg-gray-700 hover:bg-gray-800 text-white p-2 rounded-r-lg">Subscribe</button>
        </form>
    </div>
</footer>
<!-- End of footer -->


</body>
</html>
