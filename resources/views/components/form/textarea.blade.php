@props(['name'])

<textarea required name="{{$name}}" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    {{old($name)}}
</textarea>