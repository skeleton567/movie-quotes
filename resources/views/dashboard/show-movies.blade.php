<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap :lists="$movies" name="{{__('text.movies')}}">
       <x-table.wrap>
    <thead class="bg-gray-100">
      <tr>
       <x-table.th-text>{{__('text.movie')}}</x-table.th-text>
       <x-table.th-button>Edit</x-table.th-button>
       <x-table.th-button>Delete</x-table.th-button>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-gray-50">
      @foreach ($movies as $movie)
      <tr>
        <x-table.td>{{$movie->name}}</x-table.td>
          <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <a href="{{route('movies.edit', ['movie' => $movie->id])}}" class="text-indigo-600 hover:text-indigo-900">{{__('text.edit')}}</a>
            </td>
            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <x-form.inline-form route="{{route('movies.destroy', ['movie' => $movie->id])}}" class="text-red-600 hover:text-red-900" method="delete">{{__('text.delete')}}</x-form.inline-form>
            </td>
      </tr>
      @endforeach
  
    </tbody>
</x-table.wrap>
            </x-list-wrap>
          
    </x-form.wrap>
</x-layout>