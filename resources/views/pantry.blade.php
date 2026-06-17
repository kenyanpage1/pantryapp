<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(!empty($pantries))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-gray-500 text-center">You have not created a pantry yet!</p>
                </div>
            @else
                <!-- Pantries Navigation Bar Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 text-gray-900">
                        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 justify-center">
                            <li class="me-2">
                                <a href="#" class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600">Dashboard</a>
                            </li>
                            <x-pantry-tabs></x-pantry-tabs>
                            <li class="me-2">
                                <a href="#" class="inline-block px-4 py-2 rounded-md hover:text-slate-900 hover:bg-blue-600">Reports</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Items Table Matrix Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                    <div class="py-4 text-gray-900">
                        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                            @if(empty($items))
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                    <p class="text-gray-500 text-center">You have not created items yet!</p>
                                </div>
                            @else
                            <table class="w-full table-auto text-sm text-left rtl:text-right text-body">
                                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium"> Item Name </th>
                                    <th scope="col" class="px-6 py-3 font-medium"> Category </th>
                                    <th scope="col" class="px-6 py-3 font-medium"> Quantity </th>
                                    <th scope="col" class="px-6 py-3 font-medium"> Price </th>
                                    <th scope="col" class="px-6 py-3 font-medium text-center w-px whitespace-nowrap"> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr class="bg-neutral-primary border-b border-default">
                                        <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                            {{$item['name']}}
                                        </th>
                                        <td class="px-6 py-4"> {{$item['category_id']}} </td>

                                        @if($item['countable'] == 1)
                                            <td class="px-6 py-4"> {{$item['quantity']}} </td>
                                        @else
                                            <td class="px-6 py-4">1</td>
                                        @endif

                                        <td class="px-6 py-4"> ${{$item['price']}} </td>
                                        <td class="px-6 py-4 text-center whitespace-nowrap w-px">
                                            <div class="inline-flex items-center justify-center gap-2 w-48">
                                                <button type="button" class="flex-1 text-center text-white bg-warning box-border border border-transparent hover:bg-warning-strong focus:ring-4 focus:ring-warning-medium shadow-xs font-medium leading-5 rounded-full text-sm py-2.5 focus:outline-none">
                                                    EDIT
                                                </button>
                                                <button type="button" class="flex-1 text-center text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-full text-sm py-2.5 focus:outline-none">
                                                    DELETE
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>

                    <!-- Clean Pagination Hook Location -->
                    @if(method_exists($items, 'links'))
                        <div class="px-6 py-4 border-t border-default">
                            {{ $items->onEachSide(1)->links() }}
                        </div>
                    @endif
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
