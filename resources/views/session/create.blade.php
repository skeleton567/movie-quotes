<x-layout class="h-[calc(100vh-100px)]">
  <x-form.wrap class="mt-20 w-96">
        <form class="space-y-6" action="{{route('session.create')}}" method="POST">
            @csrf
            <div>
              <x-form.label name="{{__('text.email')}}"/>
              <x-form.input id="{{__('text.email')}}" name="email" type="email"/>
            </div>
            
            <div>
              <x-form.label name="{{__('text.password')}}"/>
              <x-form.input id="{{__('text.password')}}" name="password" type="password"/>
            </div>
            
          
            <x-form.submit-button>{{__('text.sign_in')}}</x-form.submit-button>
        </form>
  
       
      </x-form.wrap>
      

</x-layout>