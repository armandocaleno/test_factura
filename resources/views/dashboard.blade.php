<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('body')
        <div class="grid grid-cols-5 gap-4 my-4">
            <div class="bg-dark h-20 text-light flex items-center justify-center rounded-md shadow-lg"><span>Dark</span></div>
            <div class="bg-darkgray h-20 text-light flex items-center justify-center rounded-md shadow-lg">dark gray</div>
            <div class="bg-light h-20 flex items-center justify-center rounded-md shadow-lg">light</div>
            <div class="bg-lightblue h-20 flex items-center justify-center rounded-md shadow-md">light blue</div>
            <div class="bg-orange h-20 flex items-center justify-center rounded-md shadow-lg">orange</div>
        </div>        
               
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-darkgray">
                <thead class="text-xs text-dark uppercase bg-lightblue ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 hover:bg-light">
                        <th scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Sliver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-lightblue hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr
                        class="border-b  odd:bg-white even:bg-gray-50 hover:bg-light">
                        <th scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-lightblue hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 hover:bg-light">
                        <th scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 hover:bg-light">
                        <th scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap">
                            Google Pixel Phone
                        </th>
                        <td class="px-6 py-4">
                            Gray
                        </td>
                        <td class="px-6 py-4">
                            Phone
                        </td>
                        <td class="px-6 py-4">
                            $799
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-lightblue hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-light">
                        <th scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap">
                            Apple Watch 5
                        </th>
                        <td class="px-6 py-4">
                            Red
                        </td>
                        <td class="px-6 py-4">
                            Wearables
                        </td>
                        <td class="px-6 py-4">
                            $999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-lightblue hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
</x-app-layout>
