<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20 w-[500px]">
        <x-list-wrap name="{{__('text.new_movie')}}">
            <form class="space-y-6" action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-form.label for="name_en" name="{{__('text.movie_english')}}"/>
                    <x-form.input name="name_en" class="bg-white" type="text"/>
                </div>

                <div>
                    <x-form.label for="name_ka" name="{{__('text.movie_georgian')}}"/>
                    <x-form.input name="name_ka" class="bg-white" type="text"/>
                </div>
              
                <x-form.submit-button>{{__('text.new_movie')}}</x-form.submit-button>
            </form>

           
            </x-list-wrap>
    </x-form.wrap>
</x-layout>