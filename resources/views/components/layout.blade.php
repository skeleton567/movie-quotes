<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie quotes</title>
    @vite('resources/css/app.css')
</head>
<body  class= "box-border bg-darkGray-image m-0 p-4"> 

    <nav class="mr-6 w-full text-white fixed flex justify-end pr-10">
        
            <ul class="flex space-x-6">
                
                <li><a href="{{route('home')}}">{{__('text.home')}}</a></li>
                @guest
                <li><a href="{{route('session.create')}}">Sign In</a> </li>
                    @else
                    <li><x-form.inline-form route="{{route('session.destroy')}}" method="post">Sign Out</x-form.inline-form></li>
                    <li><a href="{{route('dashboard')}}">Dashboard</a> </li>
                @endguest
            </ul>
    </nav>

    <div class="flex">
        <aside class="h-screen w-11 text-white fixed flex flex-col pl-2 justify-center space-y-2">
            <x-form.inline-form class="border w-8 p-1 rounded-full {{ app()->getLocale() === 'en' ? 'bg-white text-black' : '' }}" route="{{route('language.change', ['locale' => 'en'])}}" method="get">en</x-form.inline-form>
            <x-form.inline-form class="border w-8 p-1 rounded-full {{ app()->getLocale() === 'ka' ? 'bg-white text-black' : '' }}" route="{{route('language.change', ['locale' => 'ka'])}}" method="get">ka</x-form.inline-form>
        </aside>
    
        <main {{$attributes->merge(['class'=>"w-full flex justify-center items-center"])}}>
            {{$slot}}
        </main>
    </div>

 
   
     
  
    
</body>
</html>