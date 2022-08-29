<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap :lists="$movies" name="movies">
            <x-table :lists="$movies" listName="Title" />
            </x-list-wrap>
          
    </x-form.wrap>
</x-layout>