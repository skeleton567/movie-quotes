<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20 w-[500px]">
        <x-list-wrap name="{{__('text.new_quote')}}">
            <form class="space-y-6" action="{{route('quotes.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-form.label for="name_en" name="{{__('text.quote_english')}}"/>
                    <x-form.textarea name="name_en">{{old('name_en')}}</x-form.textarea>
                    <x-form.error name="name_en"/>
                </div>

                <div>
                    <x-form.label for="name_ka" name="{{__('text.quote_georgian')}}"/>
                    <x-form.textarea name="name_ka">{{old('name_ka')}}</x-form.textarea>
                    <x-form.error name="name_ka"/>
                </div>
                    
                    <div>
                        <x-form.label name="{{__('text.image')}}"/>
                        <x-form.input id="{{__('text.image')}}" class="bg-white" name="image" type="file"/>
                    </div>
            
                <select name="movie_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option selected disabled value="">{{__('text.choose_movie')}}</option>
                    @foreach ($movies as $movie)
                        <option name="movie_id" value="{{$movie->id}}">{{$movie->name}}</option>
                    @endforeach
                </select>
                <x-form.error name="movie_id"/>
              
                <x-form.submit-button>{{__('text.new_quote')}}</x-form.submit-button>
            </form>
        </x-list-wrap>
    </x-form.wrap>
</x-layout>