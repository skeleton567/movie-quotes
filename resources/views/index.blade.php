
<x-layout class="h-screen">

 

   @if(isset($movie))
       
   
  

        <div class="mt-44 flex flex-col max-w-4xl items-center text-[48px] text-white"> 
            <img width="700px" height="400px" class="rounded-xl" src="images/paper.jpg" alt="">
            <h2 class="mt-6">{{$movie[0]->quotes->isEmpty() ? 'No qoutes yet' : $movie[0]->quotes->random(1)[0]->name}}</h2>
            <a href="/movies/{{$movie[0]->id}}"><h1 class="mt-12 underline">{{$movie[0]->name}}</h1></a> 
        </div>



    
 
   @else

        
        
        <x-empty-message class=" mt-96">No movies here yet!</x-empty-message>

        
   @endif
   

   
</x-layout>



   
