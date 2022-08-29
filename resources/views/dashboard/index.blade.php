<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
    <nav class="space-y-1 text-2xl text-center flex flex-col items-center w-full" aria-label="Sidebar">
        
        <a href="#" class="mb-4 text-gray-900 flex px-3 py-2 font-medium rounded-md w-full bg-white justify-center">
            <span class="truncate">{{__('text.dashboard')}} </span>
        </a>
        
        <x-dashboard-item href="{{route('dashboard.movies')}}">{{__('text.all_movies')}}</x-dashboard-item>
        <x-dashboard-item  href="{{route('dashboard.quotes')}}">{{__('text.all_quotes')}}</x-dashboard-item>
        <x-dashboard-item href="{{route('movies.create')}}">{{__('text.new_movie')}}</x-dashboard-item>
        <x-dashboard-item href="{{route('quotes.create')}}">{{__('text.new_quote')}}</x-dashboard-item>
        
      
      
        
      </nav>
    </x-form.wrap>
      
</x-layout>