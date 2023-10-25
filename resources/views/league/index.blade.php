<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Record') }}
    </h2>
  </x-slot>
  <h3 class="font-semibold text-l text-gray-900"> <a href="{{ route('league.create') }}">{{ __('Leagueを作る') }}</a></h3>
  <h3 class="font-semibold text-l text-gray-900"> <a href="{{ route('league.my_league') }}">{{ __('参加しているLeagueを見る') }}</a></h3>
</x-app-layout>

