<div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-white transform transition-transform duration-300 ease-in-out z-20">
            <div class="p-4">
                <a href="{{ url('/') }}" class="text-2xl font-semibold">Student Portal</a>
            </div>
            <nav class="mt-6">
                <ul>
                    <li>
                        <a href="/admin/dashboard" class="block px-4 py-2 hover:bg-gray-700 flex items-center gap-2">
                            <i class="fa fa-home text-sm"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/students" class="block px-4 py-2 hover:bg-gray-700 flex items-center gap-2">
                            <i class="fa fa-users text-sm"></i> Students
                        </a>
                    </li>
                </ul>
            </nav>
        </div>