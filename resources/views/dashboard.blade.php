<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="margin-left: 100px; margin-top: 40px; float:left;">
                        <canvas id="my_winning_percentage"></canvas>
                    </div>
                        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                        const ctx1 = document.getElementById('my_winning_percentage');
                        new Chart(ctx1, {
                            type: 'pie',
                            data: {
                            labels:["win", "lose"],
                            datasets:[{
                                data :[{{$individual_result_win}}, {{$individual_result_lose}}]
                            }]
                            },
                        });
                        </script> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
