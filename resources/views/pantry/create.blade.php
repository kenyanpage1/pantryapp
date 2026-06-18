<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{route('pantry.store')}}" method="post">

                    @csrf
                    <!-- Pantry Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!-- Create Button -->
                    <x-primary-button class="mt-2 float-right">
                        Create Pantry
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
