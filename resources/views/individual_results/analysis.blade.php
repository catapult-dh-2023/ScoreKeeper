
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('個人成績分析') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
            <div>
            <canvas id="my_winning_percentage"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('my_winning_percentage');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:["win", "lose"],
                        datasets:[{
                            data :[60, 40]
                        }]
                    },
                });
                // new Chart(ctx, {
                //     type: 'pie',
                //     data: {
                //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                //     datasets: [{
                //         label: '# of Votes',
                //         data: [12, 19, 3, 5, 2, 3],
                //         borderWidth: 1
                //     }]
                //     },

                // });
            </script>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>

