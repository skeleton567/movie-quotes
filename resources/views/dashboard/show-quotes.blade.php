<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap :lists="$quotes" name="quotes">
            <x-table :lists="$quotes" listName="Quote" />
        </x-list-wrap>
    </x-form.wrap>
</x-layout>