
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
          <div style="font-weight: bold; font-size: 45px; border-bottom: 2px solid #BBB; padding: 20px 30px; flex: 1;" class="mb-4">
            {{ Auth::user()->name }}
          </div>
          <div style="flex: 1; height:400px;">
            <div style="margin-left: 100px; margin-top: 40px; float:left;">
              <canvas id="my_winning_percentage"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            <div style="width: 40%; height: 15%; margin-left: 100px; margin-top: 70px; float:left;">
                <p style="font-size: 30px; margin-left:20%; margin-top:20px;">勝利数/試合数</p>
                <div>
                  <p style="font-size: 30px; margin-left:25%; float:left;">市民 : {{$win_sim}} / {{$sim}} </p>
                  @if ($sim != 0)
                    <p style="font-size: 30px; margin-left:25%;">({{ number_format(100 * $win_sim / $sim, 2) }}%)</p> 
                  @else
                    <p style="font-size: 30px; margin-left:25%;">( - %)</p>
                  @endif
                </div>
                <div>
                  <p style="font-size: 30px; margin-left:25%; float:left;">人狼 : {{$win_zin}} / {{$zin}}</p> 
                  @if ($zin != 0)
                    <p style="font-size: 30px; margin-left:25%;">({{ number_format(100 * $win_zin / $zin, 2) }}%)</p> 
                  @else
                    <p style="font-size: 30px; margin-left:25%;">( - %)</p>
                  @endif
                </div>
                <div>
                  <p style="font-size: 30px; margin-left:25%; float:left;">第三陣営 : {{$win_san}} / {{$san}}</p> 
                  @if ($san != 0)
                    <p style="font-size: 30px; margin-left:25%;">({{ number_format(100 * $win_san / $san, 2) }}%)</p> 
                  @else
                    <p style="font-size: 30px; margin-left:25%;">( - %)</p>
                  @endif
                </div>
            </div>
          </div>
          <div style="font-size: 30px; border-bottom: 2px solid #BBB; padding: 20px 30px; flex: 1;" class="mb-4">
            詳細データ
          </div>
          <div style="margin: 0px 30px;">
            <p style="font-size: 30px; border-bottom: 2px solid #BBB; padding: 20px 30px; flex: 1; margin-top:20px; text-align:center;">役職-勝率</p>
          </div>
          <div style="flex: 1; height:600px;">
            <div style="margin-left: 100px; margin-top: 200px; float:left;">
              <p>これまでの役職</p>
              <canvas id="win_role"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
              const ctx2 = document.getElementById('win_role');
              new Chart(ctx2, {
                type: 'pie',
                data: {
                  labels:["市民", "人狼", "第三陣営"],
                  datasets:[{
                    data :[{{$sim}}, {{$zin}}, {{$san}}]
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

            <div style="width: 50%; margin-left: 100px; margin-top: 70px; float:left;">
                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p>市民陣営での勝敗</p>
                  <canvas id="sim_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx3 = document.getElementById('sim_wl');
                  new Chart(ctx3, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_sim}}, {{$lose_sim}}]
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

                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p>人狼陣営での勝敗</p>
                  <canvas id="zin_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx4 = document.getElementById('zin_wl');
                  new Chart(ctx4, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_zin}}, {{$lose_zin}}]
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

                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p><p>第三陣営での勝敗</p></p>
                  <canvas id="san_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx5 = document.getElementById('san_wl');
                  new Chart(ctx5, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_san}}, {{$lose_san}}]
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
          <div style="margin: 0px 30px;">
            <p style="font-size: 30px; border-bottom: 2px solid #BBB; padding: 20px 30px; flex: 1; margin-top:20px; text-align:center;">生死-勝率</p>
          </div>
          <div style="flex: 1; height:600px;">
            <div style="margin-left: 100px; margin-top: 200px; float:left;">
              <p>試合終了時生死</p>
              <canvas id="resultway"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
              const ctx6 = document.getElementById('resultway');
              new Chart(ctx6, {
                type: 'pie',
                data: {
                  labels:["生存", "吊り", "噛み"],
                  datasets:[{
                    data :[{{$live}}, {{$hung}}, {{$bite}}]
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

            <div style="width: 50%; margin-left: 100px; margin-top: 70px; float:left;">
                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p>生存</p>
                  <canvas id="live_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx7 = document.getElementById('live_wl');
                  new Chart(ctx7, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_live}}, {{$lose_live}}]
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

                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p>吊り</p>
                  <canvas id="hung_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx9 = document.getElementById('hung_wl');
                  new Chart(ctx9, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_hung}}, {{$lose_hung}}]
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

                <div style="margin-left: 100px; margin-top: 40px; float:left; width: 30%;">
                  <p>噛み</p>
                  <canvas id="bite_wl"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx10 = document.getElementById('bite_wl');
                  new Chart(ctx10, {
                    type: 'pie',
                    data: {
                      labels:["勝利", "敗北"],
                      datasets:[{
                        data :[{{$win_bite}}, {{$lose_bite}}]
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
          <div style="margin: 0px 30px;">
            <p style="font-size: 30px; border-bottom: 2px solid #BBB; padding: 20px 30px; flex: 1; margin-top:20px; text-align:center;">人数-勝率</p>
          </div>
          <div style="width: 80%; margin: 0 auto;">
            <canvas id="percentageChart"></canvas>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
            // Canvas要素を取得
            const ctx11 = document.getElementById('percentageChart').getContext('2d');

            // チャートを描画
            const chart = new Chart(ctx11, {
              type: 'bar',
              data: {
                labels: ["9人", "10人", "11人", "12人", "13人", "14人", "15人"],
                datasets: [{
                  data: [{{$nine_win/$nine*100}}, {{$ten_win/$ten*100}}, {{$eleven_win/$eleven*100}}, {{$twelve_win/$twelve*100}}, {{$thirteen_win/$thirteen*100}}, {{$fourteen_win/$fourteen*100}}, {{$fifteen_win/$fifteen*100}}],
                  backgroundColor: 'rgba(75, 192, 192, 0.6)',
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  x: {
                    min: 0,
                    max: 100,
                    ticks: {
                      stepSize: 10
                    },
                    title: {
                      display: true,
                      text: 'Percentage (%)'
                    }
                  },
                },
                plugins: {
                  legend: {
                    display: false,
                  },
                  tooltip: {
                    callbacks: {
                      label: (context) => `${context.raw}%`
                    }
                  }
                },
                indexAxis: 'y'
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

