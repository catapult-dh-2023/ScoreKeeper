<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('新たに結果を入力する') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg min-h-16rem">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('game.store') }}" method="POST">
            @csrf
            <div>
              <p class="text-xl mb-6 border-b">データ入力</p>
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="game" :value="__('村構成')" />
              <div class="flex">
                <select id="num1" class="form-control flex" name="num1" required>
                  <option value="-">-</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                </select>
                <span class="ml-3 mt-4">人</span>
                <input type="text" id="num2" class="form-control ml-3" name="num2" required>
                <span class="ml-3 mt-4">村</span>
              </div>
              <x-input-error :messages="$errors->get('game')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="role" :value="__('役職')" />
              <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="LD" :value="__('生死状況')" />
              <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="result" :value="__('結果')" />
              <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Create') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>