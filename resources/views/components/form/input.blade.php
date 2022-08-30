@props(['name', 'type' => 'text', 'value'=> old($name), 'id'=> $name])

    
    <div class="mt-1 w-full">
      <input id="{{$id}}" name="{{$name}}" id="{{$name}}" type="{{$type}}" autocomplete="{{$name}}" value="{{$value}}"
      {{$attributes->merge(['class'=>"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"])}}>
       <x-form.error name="{{$name}}"/>
    </div>
