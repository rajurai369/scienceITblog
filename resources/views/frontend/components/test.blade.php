<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blogs</title>
</head>
<body class="bg-gray-100">
    <!-- Start of header -->
    <header class="bg-blue-600 p-4 text-white flex justify-between items-center">
        <div class="flex space-x-4">
            <a href="{{route('home')}}">
                <img src="https://imgcdn.stablediffusionweb.com/2024/5/17/1febbfbb-ebe3-43c0-872f-256e4df0712b.jpg" alt="Logo" class="w-12 h-12 rounded-full">
            </a>
            <nav class="flex space-x-4">
                <a href="{{route('physics')}}" class="hover:underline">Physics</a>
                <a href="{{route('technology')}}" class="hover:underline">Technology</a>
            </nav>
        </div>
        <div>
            <!-- User Logo -->
            <img id="userLogo" src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="User Logo" class="w-12 h-12 rounded-full cursor-pointer">
        </div>
    </header>
    <!-- End of header -->

    @yield('content')

    <!-- Start of footer -->
    <footer class="bg-blue-600 text-white py-8 mt-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex space-x-6 mb-4 md:mb-0">
                <a href="#" class="hover:text-gray-300">Facebook</a>
                <a href="#" class="hover:text-gray-300">LinkedIn</a>
                <a href="#" class="hover:text-gray-300">Twitter</a>
                <a href="#" class="hover:text-gray-300">Instagram</a>
            </div>
            <form class="flex">
                <input type="email" placeholder="Enter your email" class="p-2 rounded-l-lg">
                <button class="bg-gray-700 hover:bg-gray-800 text-white p-2 rounded-r-lg">Subscribe</button>
            </form>
        </div>
    </footer>
    <!-- End of footer -->

    <!-- Modal Background -->
    <div id="modalBackground" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm">
            <h2 class="text-lg font-semibold mb-4">User Menu</h2>
            <p class="mb-4">This is a simple modal popup when you click the user logo.</p>
            <button id="closeModal" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Close
            </button>
        </div>
    </div>

    <script>
        // Get modal elements
        const userLogo = document.getElementById('userLogo');
        const modalBackground = document.getElementById('modalBackground');
        const closeModal = document.getElementById('closeModal');

        // Show modal when clicking on the user logo
        userLogo.addEventListener('click', () => {
            modalBackground.classList.remove('hidden');
        });

        // Hide modal when clicking the close button
        closeModal.addEventListener('click', () => {
            modalBackground.classList.add('hidden');
        });

        // Optional: Close modal when clicking outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modalBackground) {
                modalBackground.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
