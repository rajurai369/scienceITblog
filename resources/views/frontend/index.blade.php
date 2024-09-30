@extends('frontend.components.app')

@section('content')
 <!-- Start of main -->
 <main class="container mx-auto mt-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @foreach ($blogs as $blog)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Pass the blog ID to the blog_detail route -->
            <a href="{{ route('blog_detail', ['id' => $blog->id]) }}">
                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-xl font-bold mb-2">{{ $blog->title }}</h3>
                <p class="text-gray-600">{{ Str::limit($blog->description, 100) }}</p>
                <h1 class="text-blue-600">{{ $blog->branch }}</h1>
            </div>
        </div>
    @endforeach




    </div>
</main>
<!-- End of main -->

@endsection
