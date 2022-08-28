@props(['name'])

<div class="mt-2">
    @error($name)
       <p class="text-red-500 text-xs">{{$message}}</p> 
    @enderror
      </div>