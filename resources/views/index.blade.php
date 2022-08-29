
<x-layout class="h-[calc(100vh-100px)]">

 

   @if(isset($quote))
       
   
  

        <div class="mt-20 flex flex-col max-w-4xl items-center text-[48px] text-white"> 
               <div class="bg-white w-[700px] h-[386px]">
                    <img class="w-full h-full" class="rounded-xl" src="storage/{{$quote[0]->image}}" alt="">
               </div>
            <h2 class="mt-6">"{{$quote[0]->name}}"</h2>
            <a href="{{route('movie', ['movie' => $quote[0]->movie->id])}}"><h1 class="mt-12 underline">{{$quote[0]->movie->name}}</h1></a> 
        </div>



    
 
   @else

        
        
        <x-empty-message class=" mt-20">No movies here yet!</x-empty-message>

        
   @endif
   

   
</x-layout>



   
