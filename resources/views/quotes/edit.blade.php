<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap name="Edit Quote" route="{{route('dashboard.quotes')}}">
            <form class="space-y-6" action="{{route('quotes.update', ['quote'=> $quote->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div>
                    <x-form.label for="name_en" name="quote in english"/>
                    <x-form.textarea name="name.en">{{$quote->getTranslation('name', 'en')}}</x-form.textarea>
                    <x-form.error name="name_en"/>
                </div>

                <div>
                    <x-form.label for="name_ka" name="quote in georgian"/>
                    <x-form.textarea name="name.ka">{{$quote->getTranslation('name', 'ka')}}</x-form.textarea>
                    <x-form.error name="name_ka"/>
                </div>
                    
                    <div>
                        <x-form.label name="image"/>
                        <x-form.input class="bg-white" name="image" type="file"/>
                    </div>
            
                <select name="movie_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($movies as $movie)
                        <option {{$quote->movie->id === $movie->id ? 'selected' : ''}} name="movie_id" value="{{$movie->id}}">{{$movie->name}}</option>
                    @endforeach
                </select>
                <x-form.error name="movie_id"/>
              
                <x-form.submit-button>Edit Quote</x-form.submit-button>
            </form>
        </x-list-wrap>
    </x-form.wrap>
</x-layout>