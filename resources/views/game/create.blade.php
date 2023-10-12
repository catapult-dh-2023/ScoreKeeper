<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add a new result of Jinro') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('game.store') }}" method="POST">
            @csrf
            <div>
              <p class="text-xl mb-6">Data Input</p>
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="game" :value="__('Tweet')" />
              <x-text-input id="game" class="block mt-1 w-full" type="text" name="game" :value="old('game')" required autofocus />
              <x-input-error :messages="$errors->get('game')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="description" :value="__('Description')" />
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

