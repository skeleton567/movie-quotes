@props(['lists', 'name'])

<main class="p-4 h-ful">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
         <x-list-header>{{ucwords($name)}}</x-list-header>
          <x-form.back-button/>
        </div>
        <div class="mt-8 flex flex-col">
          <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
              <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                {{$slot}}
            </div>
            <x-pagination :lists="$lists"/>
            
          </div>
        </div>
      </div>
    </div>
    
</main>