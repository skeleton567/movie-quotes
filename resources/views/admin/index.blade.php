<x-layout>
    <x-form.wrap class="mt-72">
    <nav class="space-y-1 text-2xl text-center flex flex-col items-center w-full" aria-label="Sidebar">
        
        <a href="#" class="mb-4 text-gray-900 flex px-3 py-2 font-medium rounded-md w-full bg-white justify-center">
            <span class="truncate"> Dashboard </span>
        </a>
        
        <x-dashboard-item href="{{route('admin.movies')}}">All Movies</x-dashboard-item>
        <x-dashboard-item  href="{{route('admin.quotes')}}">All Quotes</x-dashboard-item>
        <x-dashboard-item>Create new Movie</x-dashboard-item>
        <x-dashboard-item>Create new Quote</x-dashboard-item>
        
      
      
        
      </nav>
    </x-form.wrap>
      
</x-layout>