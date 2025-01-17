@extends('layouts.main')

@section('content')
    <div class="max-w-4xl mx-auto mt-10">
        <!-- Add Student Form -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Student</h2>
            
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 mb-6 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <div class="relative">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" 
                               class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none p-3">
                        @error('name')
                            <div class="absolute text-red-600 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none p-3">
                        @error('email')
                            <div class="absolute text-red-600 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                        <input id="class" type="text" name="class" value="{{ old('class') }}"
                               class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none p-3">
                        @error('class')
                            <div class="absolute text-red-600 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                            Add Student
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Students Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Class</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Date Added</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($students->isEmpty())
                        <tr class="hover:bg-indigo-50 transition duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">No records found</td>
                        </tr>
                    @else
                    @foreach ($students as $student)
                        <tr class="hover:bg-indigo-50 transition duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $student->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $student->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $student->class }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $student->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>

            <div class="px-6 py-4">
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
