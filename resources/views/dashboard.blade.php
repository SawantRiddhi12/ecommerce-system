<x-app-layout>
    <x-slot name="header">
        <nav class="flex justify-between items-center">
            <!-- Title -->
            <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2> -->

            <!-- Menu -->
            <div class="space-x-8">
                <a href="{{ route('products.index') }}" class="text-sm text-gray-700 hover:text-gray-900">
                    Products
                </a>
                <a href="{{ route('categories.index') }}" class="text-sm text-gray-700 hover:text-gray-900">
                    Categories
                </a>
                <a href="{{ route('sales.report') }}" class="text-sm text-gray-700 hover:text-gray-900">
                    Sales Report
                </a>
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>