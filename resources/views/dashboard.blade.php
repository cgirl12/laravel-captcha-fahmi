<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.4.1/tailwind.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-2">👋 Welcome back, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-600">Here’s a quick overview of your activities.</p>
                </div>
                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-[#3F83F8] text-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-bold">📊 150 Users</h4>
                        <p class="text-white/80">Total registered users</p>
                    </div>
                    <div class="bg-green-500 text-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-bold">💰 1,200 Transactions</h4>
                        <p class="text-white/80">Successful transactions</p>
                    </div>
                    <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-bold">📩 320 Messages</h4>
                        <p class="text-white/80">New customer inquiries</p>
                    </div>
                </div>
    
                <!-- Quick Actions -->
                <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4">🚀 Quick Actions</h3>
                    <div class="flex gap-4">
                        <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-700">
                            Manage Users
                        </a>
                        <a href="#" class="bg-green-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-700">
                            View Transactions
                        </a>
                        <a href="#" class="bg-yellow-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-700">
                            Check Messages
                        </a>
                    </div>
                </div>
    
                <!-- Recent Activity -->
                <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4">📜 Recent Activity</h3>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">✅ User <b>John Doe</b> registered an account.</li>
                        <li class="py-2">💰 You received a payment of <b>$50</b>.</li>
                        <li class="py-2">📩 New message from <b>Alice Smith</b>.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
