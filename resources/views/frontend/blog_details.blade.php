@extends('frontend.components.app')

@section('content')

<!-- Start of main -->
<main class="container mx-auto mt-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Blog Image -->
        @if($blog->image)
            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-96 object-cover">
        @else
            <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="w-full h-96 object-cover">
        @endif

        <div class="p-6">
            <!-- Blog Title -->
            <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>

            <!-- Blog Description -->
            <p class="text-gray-800 leading-7 mb-4">{{ $blog->description }}</p>

            <!-- Blog Branch -->
            @if($blog->branch)
                <h2 class="text-xl text-blue-600 font-semibold mb-2">Branch: {{ $blog->branch }}</h2>
            @endif

            <!-- Back to Blog List Button -->
            <a href="{{ route('home1') }}" class="mt-6 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Back to Blogs</a>
        </div>
    </div>
</main>
<!-- End of main -->

@endsection
