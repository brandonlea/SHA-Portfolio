<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Socials') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-20">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('hub.experience.store') }}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
                        @csrf
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                            <div>
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Experiences
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        This information will be displayed publicly so be careful what you share.
                                    </p>
                                </div>

                                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="icon" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Icon
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg flex rounded-md shadow-sm">
                                                <input required type="text" name="icon" id="icon"
                                                       class="flex-1 block w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Title
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg flex rounded-md shadow-sm">
                                                <input required type="text" name="title" id="title"
                                                       class="flex-1 block w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Date
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg flex rounded-md shadow-sm">
                                                <input required type="text" name="date" id="date"
                                                       class="flex-1 block w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button type="submit"
                                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                        Create
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
