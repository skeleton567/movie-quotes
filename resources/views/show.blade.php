<x-layout>

    

        <div class="flex flex-col justify-start">
            <h1 class="text-[48px] text-white mt-10">{{$movie->name}}</h1>
      

        @if ($movie->quotes->count())
            @foreach ($movie->quotes as $quote)
                 <div class="mt-10 max-w-[748px] bg-white rounded-xl border border-black">

                    <div class="w-[748px] h-[414px]">
                        <img class="w-full h-full" src="/storage/{{$quote->image}}" alt="">
                    </div>
                    

                    <div class="pb-7">
                        <h2 class="mt-6 mx-4 text-[36px]">{{$quote->name}}</h2>
                    </div>
                </div>
            @endforeach
        </main>
        @else 
     

        
        
            <x-empty-message class=" mt-80">No qoutes yet!</x-empty-message>
        
        @endif
            

    

</x-layout>