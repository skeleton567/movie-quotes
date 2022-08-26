@props(['lists', 'listName'])

<table class="min-w-full divide-y divide-gray-300">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">{{$listName}}</th>
        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
          <span class="sr-only">Edit</span>
        </th>
        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
          <span class="sr-only">Delete</span>
        </th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-gray-50">
      @foreach ($lists as $list)
      <tr>
          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-black sm:pl-6">{{$list->name}}</td>
          <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
            </td>
      </tr>
      @endforeach
  
    </tbody>
  </table>