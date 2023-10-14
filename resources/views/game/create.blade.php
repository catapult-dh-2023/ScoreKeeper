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
            <div class="flex flex-col mb-6">
              <x-input-label for="date" :value="__('ゲーム実施日')" />
              <input id="date" type="date" name="date" class="block mt-1 w-full border border-gray-300 rounded p-2" value="{{ old('date') }}" required autofocus />
              <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="event" :value="__('イベント名')" />
              <x-text-input id="event" class="block mt-1 w-full" type="text" name="event_name" :value="old('event')" placeholder="エンジニアカタパルト人狼交流会" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="note" :value="__('イベントの詳細')" />
              <x-text-input id="note" class="block mt-1 w-full" type="text" name="note" :value="old('note')" required autofocus />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
              <x-input-label for="game" :value="__('村構成')" />
              <div class="flex">
                <select id="num1" class="form-control flex border-gray-300 rounded py-1" name="total_participants" required>
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
                <div class="flex flex-col mb-6 ml-3">
                  <x-text-input id="description" class="block mt-1 w-full" type="text" name="situation" :value="old('description')" placeholder="通常" required autofocus />
                  <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
                <span class="ml-3 mt-4">村</span>
              </div>
              <x-input-error :messages="$errors->get('game')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="role_id" :value="__('役職')" />
              <select id="num1" class="form-control flex border-gray-300 rounded py-1" name="role_id" required>
                <option value="1">人狼</option>
                <option value="2">狂人</option>
                <option value="3">狂信者</option>
                <option value="4">市民</option>
                <option value="5">騎士</option>
                <option value="6">霊媒師</option>
                <option value="7">占い師</option>
                <option value="8">共有者</option>
                <option value="9">名探偵</option>
                <option value="10">てるてる</option>
                <option value="11">妖狐</option>
                <option value="12">背徳者</option>
              </select>
            </div>
            <div class="flex flex-col mb-6">
              <x-input-label for="result_id" :value="__('勝敗')" />
              <select id="result_id" class="form-control flex border-gray-300 rounded py-1" name="result_id" required>
                <option value="1">勝ち</option>
                <option value="2">負け</option>
              </select>
            </div>
            <input name = 'result_day' type = 'text'>日目</input>
            <div class="flex flex-col mb-6">
              <x-input-label :value="__('生存 or 死亡')" />
              <div class="flex items-center">
                <input type="radio" name="result_way_id" id="victory" value="1" class="ml-2">
                <label for="victory" class="ml-2">生存</label>
                <input type="radio" name="result_way_id" id="day" value="2" class="ml-2">
                <label for="day" class="ml-2">吊り</label>
                <input type="radio" name="result_way_id" id="day" value="3" class="ml-2">
                <label for="day" class="ml-2">噛み</label>
              </div>
            </div>
            {{--
            <div class="flex flex-col mb-6" id="outcome">
              <x-input-label for="outcome" :value="__('結果')" />
              <input type="text" name="outcome" class="border-gray-300 rounded py-1" />
            </div>
            <script>
              const victoryRadio = document.getElementById('victory');
              const dayRadio = document.getElementById('day');
              const outcomeInput = document.getElementById('outcome');
              
              outcomeInput.style.display = 'none';

              victoryRadio.addEventListener('change', () => {
                  outcomeInput.style.display = 'none';
              });

              dayRadio.addEventListener('change', () => {
                  outcomeInput.style.display = 'block';
              });
            </script>
            --}}
            <div class="flex flex-col mb-6">
              <x-input-label for="note" :value="__('メモ')" />
              <x-text-input id="note" class="block mt-1 w-full" type="text" name="memo" :value="old('memo')" placeholder="おなかが減って集中できなかった" required autofocus />
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