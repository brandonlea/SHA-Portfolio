<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex justify-center">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block w-auto sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="w-auto divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Short Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Image
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Odd row -->
                               @foreach($data as $products)
                                   <tr class="bg-white">
                                       <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                           {{ $products->title }}
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                           {{ $products->short_description }}
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                           {{ Str::limit($products->description, 40, $end='...') }}

                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                           <img class="w-10 h-10" src="{{ $products->image }}" alt="{{ $products->title }}">
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                           <a href="products/edit/{{ $products->id }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                           <form action="/hub/products/delete/{{ $products->id }}" method="post">
                                               @csrf
                                               <button class="text-indigo-600 hover:text-indigo-900" type="submit">Delete</button>
                                           </form>
                                       </td>
                                   </tr>
                               @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
