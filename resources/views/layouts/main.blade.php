<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Portal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar-transition {
            transition: all 0.3s ease-in-out;
        }
        .content-transition {
            transition: all 0.3s ease-in-out;
        }
        .button-transition {
            transition: left 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="relative min-h-screen flex">
        @include('layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="contentWrapper" class="flex-1 transition-all duration-300 ml-64 bg-transparent">
            <button
                id="toggleButton"
                class="fixed top-4 left-[13rem] bg-gray-800 text-white p-2 rounded-md focus:outline-none hover:bg-gray-700 z-30 button-transition"
            >
                <i id="toggleIcon" class="fa fa-bars"></i>
            </button>

            @include('layouts.header')

            <main class="p-6 pl-16">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const contentWrapper = document.getElementById('contentWrapper');
        const toggleButton = document.getElementById('toggleButton');
        const toggleIcon = document.getElementById('toggleIcon');
        let isSidebarOpen = true;

        toggleButton.addEventListener('click', () => {
            isSidebarOpen = !isSidebarOpen;
            
            if (!isSidebarOpen) {
                // Collapse sidebar
                sidebar.classList.add('-translate-x-full');
                contentWrapper.classList.remove('ml-64');
                contentWrapper.classList.add('ml-16');
                contentWrapper.classList.add('bg-gray-800'); // Add background color to contentWrapper
                toggleButton.classList.remove('left-[13rem]');
                toggleButton.classList.add('left-4');
                toggleIcon.classList.remove('fa fa-bars');
                toggleIcon.classList.add('fa fa-bars');
            } else {
                // Expand sidebar
                sidebar.classList.remove('-translate-x-full');
                contentWrapper.classList.remove('ml-16', 'bg-gray-800');
                contentWrapper.classList.add('ml-64');
                toggleButton.classList.remove('left-4');
                toggleButton.classList.add('left-[13rem]');
                toggleIcon.classList.remove('fa fa-bars');
                toggleIcon.classList.add('fa fa-bars');
            }
        });
    </script>
</body>
</html>
