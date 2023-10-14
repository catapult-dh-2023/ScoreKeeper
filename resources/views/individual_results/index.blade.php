
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('個人成績一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table>
            <thead>
              <tr>
                <th >個人成績一覧</th> 
              </tr>
            </thead>
            <tbody>
              @foreach ($individual_results as $individual_result)
              <tr>
                <td>game_id  {{$individual_result->game_id}}</td>
                <td>role_id  {{$individual_result->role_id}}</td>
                <td>{{$individual_result->result_id}}</td>
                <td>{{$individual_result->result_day}}</td>
                <td>{{$individual_result->result_way_id}}</td>
                <td>{{$individual_result->note}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
