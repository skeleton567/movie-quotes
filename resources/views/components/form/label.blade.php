@props(['name', 'for'=>$name])

<label for="{{$for}}" class="block text-sm font-medium text-white"> {{ucwords($name)}} </label>