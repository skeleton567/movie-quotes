@props(['route', 'method'])

<form  action="{{$route}}" method="{{$method}}">
    @csrf
    <button {{$attributes->merge(['class'=>""])}} type="submit">{{$slot}}</button>
</form>