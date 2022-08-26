<x-layout>
    <x-form.wrap class="mt-20">
        <x-list-wrap :lists="$quotes" name="quotes">
            <x-table :lists="$quotes" />
        </x-list-wrap>
    </x-form.wrap>
</x-layout>