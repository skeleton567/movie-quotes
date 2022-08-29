<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap name="{{__('text.edit_movie')}}"  route="{{route('dashboard.movies')}}">
            <form class="space-y-6" action="{{route('movies.update', ['movie'=>$movie->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div>
                    <x-form.label for="name_en" name="{{__('text.movie_english')}}"/>
                    <x-form.input value="{{$movie->getTranslation('name', 'en')}}" name="name_en" class="bg-white" type="text"/>
                </div>

                <div>
                    <x-form.label for="name_ka" name="{{__('text.movie_georgian')}}"/>
                    <x-form.input value="{{$movie->getTranslation('name', 'ka')}}" name="name_ka" class="bg-white" type="text"/>
                </div>
              
                <x-form.submit-button>{{__('text.edit_movie')}}</x-form.submit-button>
            </form>

           
            </x-list-wrap>
    </x-form.wrap>
</x-layout>