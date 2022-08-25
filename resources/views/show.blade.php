<x-layout>

    

        <div class="flex flex-col justify-start">
            <h1 class="text-[48px] text-white mt-10">{{$movie->name}}</h1>
      

        @if ($movie->quotes->count())
            @foreach ($movie->quotes as $qoute)
                 <div class="mt-10 max-w-2xl bg-white rounded-xl border border-black">
                    <img class="" src="/images/paper.jpg" alt="">

                    <div class="pb-7">
                        <h2 class="mt-6 text-[36px]">{{$qoute->name}}</h2>
                    </div>
                </div>
            @endforeach
        </main>
        @else 
     

        
        
            <x-empty-message class=" mt-80">No qoutes yet!</x-empty-message>
        
        @endif
            

    

</x-layout>