<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('個人成績') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-9/10 lg:w-9/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table>
            <style>
              table {
                  border-collapse: collapse;
                  width: 100%;
              }

              th, td {
                  border: 1px solid #ccc;
                  padding: 8px;
                  text-align: center;
              }

              /* 垂直方向の中央揃え */
              td {
                  vertical-align: middle;
              }
            </style>
            <tbody>
                <th>日付</th>
                <th>イベント</th>
                <th>村構成</th>
                <th>イベント詳細</th>
                <th>役職</th>
                <th>勝敗</th>
                <th>死亡</th>
                <th>生存状況</th>
                <th>メモ</th>
              @foreach ($individual_results as $individual_result)
              <tr>
                <td>{{$individual_result->game->date}}</td>
                <td>{{$individual_result->game->event_name}}</td>
                <td>{{(string)$individual_result->game->total_participants.$individual_result->game->situation}}村</td>
                <td>{{$individual_result->game->note}}</td>
                <td>{{$individual_result->role->name}}</td>
                <td>{{$individual_result->result->name}}</td>
                @if ($individual_result->result_day !== null && $individual_result->result_way->id !== 3)
                  <td>{{ $individual_result->result_day }} 日目</td>
                @endif
                @if ($individual_result->result_way->id !== 3)
                  <td>{{$individual_result->result_way->name}}</td>
                @endif
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