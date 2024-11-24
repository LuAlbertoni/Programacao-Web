<x-app-layout>
    @section('title', 'Relatórios')

    <div class="container mt-4">

        <h1 class="text-center text-danger">Relatório Geral</h1>

        <div class="text-center text-secondary mb-4">
            <strong>Gerado em:</strong> {{ now()->format('d/m/Y H:i:s') }}
        </div>

        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-danger">{{ $total_vagas }}</h2>
                        <p class="text-dark">Total de Vagas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-danger">{{ $total_vagas_abertas }}</h2>
                        <p class="text-dark">Vagas Abertas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-danger">{{ $total_vagas_fechadas }}</h2>
                        <p class="text-dark">Vagas Fechadas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-danger">{{ $total_cliques }}</h2>
                        <p class="text-dark">Total de Cliques</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h3 class="mb-3">Vagas Postadas</h3>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Título</th>
                        <th>Status</th>
                        <th>Cliques</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vagas_abertas->merge($vagas_fechadas) as $vaga)
                    <tr>
                        <td>{{ $vaga->titulo }}</td>
                        <td>{{ ucfirst($vaga->status) }}</td>
                        <td>{{ $vaga->total_cliques }}</td>
                        <td>
                            <a href="{{ route('vagas.show', $vaga->id) }}" class="btn btn-info btn-sm">Ver Vaga</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <h3 class="mb-3">Gráficos</h3>
            <div class="row">
                <div class="col-md-6">
                    <canvas id="clicksChart" style="height: 400px;"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="statusChart" style="height: 400px;"></canvas>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var clicksCtx = document.getElementById('clicksChart').getContext('2d');
    var clicksChart = new Chart(clicksCtx, {
        type: 'bar',
        data: {
            labels: @json($vagas_abertas->merge($vagas_fechadas)->pluck('titulo')->toArray()),
            datasets: [{
                label: 'Quantidade de Cliques',
                data: @json($vagas_abertas->merge($vagas_fechadas)->pluck('total_cliques')->toArray()),
                backgroundColor: '#28a745',
                borderColor: '#28a745',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var statusCtx = document.getElementById('statusChart').getContext('2d');
    var statusChart = new Chart(statusCtx, {
        type: 'pie',
        data: {
            labels: ['Vagas Abertas', 'Vagas Fechadas'],
            datasets: [{
                label: 'Quantidade de Vagas por Status',
                data: [{{ $total_vagas_abertas }}, {{ $total_vagas_fechadas }}],
                backgroundColor: ['#28a745', '#dc3545'],
                borderColor: ['#28a745', '#dc3545'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top'
                }
            }
        }
    });
</script>
