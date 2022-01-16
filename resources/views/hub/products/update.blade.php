<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-20">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/hub/products/edit/{{$data->id}}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
                        @csrf
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                            <div>
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Products
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        This information will be displayed publicly so be careful what you share.
                                    </p>
                                </div>

                                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Title
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg flex rounded-md shadow-sm">
                                                <input required type="text" name="title" id="title" value="{{ $data->title }}"
                                                       class="flex-1 block w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="short_description"
                                               class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Short Description
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <textarea required id="short_description" name="short_description" rows="2"
                                                      class="max-w-lg shadow-sm block w-full focus:ring-gray-500 focus:border-gray-500 sm:text-sm border border-gray-300 rounded-md">{{ $data->short_description }}</textarea>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Short description about your product.</p>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Description
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <textarea required id="description" name="description" rows="2"
                                                      class="max-w-lg shadow-sm block w-full focus:ring-gray-500 focus:border-gray-500 sm:text-sm border border-gray-300 rounded-md">{{ $data->description }}</textarea>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Long description about your product.</p>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Image
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <img id="show-image" src="{{ $data->image }}" alt="">
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-gray-600 hover:text-gray-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                                                            <span>Upload a file</span>
                                                            <input value="{{ $data->image }}" onchange="readURL(this)"  id="image" name="image" type="file" class="sr-only">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button type="submit"
                                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                        Update
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#show-image')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>
