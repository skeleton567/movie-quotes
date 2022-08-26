<x-layout>

   

  <x-form.wrap class="mt-72">
        <form class="space-y-6" action="{{route('session.store')}}" method="POST">
            @csrf
            <x-form.input name="email" type="email"/>
            <x-form.input name="password" type="password"/>
          
          <div>
            <button type="submit" 
            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign in</button>
          </div>
        </form>
  
       
      </x-form.wrap>
      

</x-layout>