<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hub') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Stats
                </h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Vouches
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                           {{ \App\Models\Vouches::count() }}
                        </dd>
                    </div>

                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Products
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ \App\Models\Portfolio::count() }}
                        </dd>
                    </div>

                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Socials
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ \App\Models\Socials::count() }}
                        </dd>
                    </div>
                </dl>
            </div>



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-20">
                <div class="p-6 bg-white border-b border-gray-200">
                    More Coming soon
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
