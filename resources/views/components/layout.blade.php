<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body  class="box-border m-0 p-0 bg-darkGray-image flex"> 

    <aside class="h-screen w-11 text-white fixed flex flex-col pl-6 justify-center space-y-2">
        <button class="border w-8 p-1 rounded-full">en</button>
        <button class="border w-8 p-1 rounded-full">ka</button>
    </aside>

    
        {{$slot}}
    
   
     
  
    
</body>
</html>