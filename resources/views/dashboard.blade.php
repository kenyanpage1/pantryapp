<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 justify-center">
                            <li class="me-2">
                                <a href="#" class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600">Dashboard</a>
                            </li>
                            @foreach($pantries as $pantry )
                                <li class="me-2">
                                    <a href="#"
                                       class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600"
                                    >{{$pantry['name']}}</a>
                                </li>
                            @endforeach
                            <li class="me-2">
                                <a href="#"
                                   class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600"
                                >Reports</a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="py-4 text-gray-900">
                    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Item Name
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Price
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item )
                            <tr class="bg-neutral-primary border-b border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{$item['name']}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$item['category_id']}}
                                </td>
                                <td class="px-6 py-4">
                                    ${{$item['price']}}
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
</x-app-layout>
