<x-telas title="Pagina Inicial Coordenador">
        <h2 class="mb-4">Reuniões</h2>
        <button class="btn btn-success mb-3" onclick="location.href='{{route('tela.cadastrar')}}'">Adicionar Reunião</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora Início</th>
                    <th>Hora Fim</th>
                    <th>Tema</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-11-30</td>
                    <td>10:00</td>
                    <td>12:00</td>
                    <td>Planejamento Anual</td>
                    <td><button class="btn btn-info" onclick="location.href='{{route('tela.detalhes')}}'">Detalhes</button></td>
                </tr>
                <tr>
                    <td>2024-12-01</td>
                    <td>18:00</td>
                    <td>19:00</td>
                    <td>Pagamento Auxílio</td>
                    <td><button class="btn btn-info" onclick="location.href='{{route('tela.detalhes')}}'">Detalhes</button></td>
                </tr>
                <tr>
                    <td>2024-12-12</td>
                    <td>14:00</td>
                    <td>16:00</td>
                    <td>Semana Integradora</td>
                    <td><button class="btn btn-info" onclick="location.href='{{route('tela.detalhes')}}'">Detalhes</button></td>
                </tr>
                <tr>
                    <td>2024-12-26</td>
                    <td>14:00</td>
                    <td>16:00</td>
                    <td>Entrega de Boletim</td>
                    <td><button class="btn btn-info" onclick="location.href='{{route('tela.detalhes')}}'">Detalhes</button></td>
                </tr>
                <tr>
                    <td>2025-01-10</td>
                    <td>14:00</td>
                    <td>18:00</td>
                    <td>Volta as Aulas</td>
                    <td><button class="btn btn-info" onclick="location.href='{{route('tela.detalhes')}}'">Detalhes</button></td>
                </tr>
            </tbody>
        </table>
</x-telas>
