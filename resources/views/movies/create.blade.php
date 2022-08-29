<x-layout class="h-[calc(100vh-100px)]">
    <x-form.wrap class="mt-20">
        <x-list-wrap name="create new movie">
            <form class="space-y-6" action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <x-form.label name="movie in english"/>
                    <x-form.input name="name.en" class="bg-white" type="text"/>
                </div>

                <div>
                    <x-form.label name="movie in georgian"/>
                    <x-form.input name="name.ka" class="bg-white" type="text"/>
                </div>
              
                <x-form.submit-button>Create Movie</x-form.submit-button>
            </form>

           
            </x-list-wrap>
    </x-form.wrap>
</x-layout>