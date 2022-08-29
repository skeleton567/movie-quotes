<x-layout class="h-[calc(100vh-100px)]">
  <x-form.wrap class="mt-20 w-96">
        <form class="space-y-6" action="{{route('session.create')}}" method="POST">
            @csrf
            <div>
              <x-form.label name="email"/>
              <x-form.input name="email" type="email"/>
            </div>
            
            <div>
              <x-form.label name="password"/>
              <x-form.input name="password" type="password"/>
            </div>
            
          
            <x-form.submit-button>Sign In</x-form.submit-button>
        </form>
  
       
      </x-form.wrap>
      

</x-layout>