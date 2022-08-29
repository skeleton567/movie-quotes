<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap name="create new Quote">
            <form class="space-y-6" action="{{route('quotes.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-form.label name="quote in english"/>
                    <x-form.textarea name="name.en"/>
                    <x-form.error name="name.en"/>
                </div>

                <div>
                    <x-form.label name="quote in georgian"/>
                    <x-form.textarea name="name.ka"/>
                    <x-form.error name="name.ka"/>
                </div>
                    
                    <div>
                        <x-form.label name="image"/>
                        <x-form.input class="bg-white" name="image" type="file"/>
                    </div>
            
                <select name="movie_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option selected disabled value="">Choose movie for your quote</option>
                    @foreach ($movies as $movie)
                        <option name="movie_id" value="{{$movie->id}}">{{$movie->name}}</option>
                    @endforeach
                </select>
                <x-form.error name="movie_id"/>
              
                <x-form.submit-button>Create Quote</x-form.submit-button>
            </form>
        </x-list-wrap>
    </x-form.wrap>
</x-layout>