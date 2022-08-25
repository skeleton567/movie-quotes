<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie quotes</title>
    @vite('resources/css/app.css')
</head>
<body  {{$attributes->merge(['class'=>"box-border bg-darkGray-image m-0 p-4"])}}> 

    <nav class="mr-6 w-full text-white fixed flex justify-end pr-10">
        
            <ul class="flex space-x-6">
                
                <li><a href="{{route('home')}}">Home</a></li>
                @guest
                <li><a href="{{route('session.create')}}">Sign In</a> </li>
                    @else
                    <li><form action="{{route('session.destroy')}}" method="POST">
                        @csrf
                        <button type="submit">Sign Out </button>
                    </form></li>
                    <li><a href="{{route('dashboard')}}">Dashboard</a> </li>
                @endguest
            </ul>
        
    </nav>

    <div class="flex">
        <aside class="h-screen w-11 text-white fixed flex flex-col pl-2 justify-center space-y-2">
            <button class="border w-8 p-1 rounded-full">en</button>
            <button class="border w-8 p-1 rounded-full">ka</button>
        </aside>
    
        <main class="w-full flex justify-center items-center">
            {{$slot}}
        </main>
    </div>

 
   
     
  
    
</body>
</html>