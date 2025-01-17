@extends('layouts.main')

@section('content')
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active text-gray-900 font-bold pb-3" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <div class="flex space-x-4">
            <div class="w-full md:w-1/4 mb-4">
                <div class="bg-blue-500 text-white rounded-lg shadow-md">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold text-gray-100">Total Students</h5>
                        <p class="text-2xl font-bold text-gray-200">{{ $studentsCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
