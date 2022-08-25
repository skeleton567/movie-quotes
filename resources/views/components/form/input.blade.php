@props(['name', 'type' => 'text'])

<div>
    <label for="{{$name}}" class="block text-sm font-medium text-white"> {{ucwords($name)}} </label>
    <div class="mt-1">
      <input id="{{$name}}" name="{{$name}}" type="{{$type}}" autocomplete="{{$name}}" required 
      class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <div class="mt-2">
      @error($name)
         <p class="text-red-500 text-xs">{{$message}}</p> 
      @enderror
        </div>
    </div>
</div>