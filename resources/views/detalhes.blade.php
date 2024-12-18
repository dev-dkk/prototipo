<x-telas title="Detalhes Reunião">
    <h2 class="mb-4">Detalhes da Reunião</h2>
    <form>

        <div class="form-group mb-3">
            <label for="data">Data</label>
            <label class="form-control">2024-11-30</label>
        </div>
        <div class="form-group mb-3">
            <label for="hora_inicio">Hora Início</label>
            <label class="form-control">10:00</label>
        </div>
        <div class="form-group mb-3">
            <label for="hora_fim">Hora Fim</label>
            <label class="form-control">12:00</label>
        </div>
        <div class="form-group mb-3">
            <label for="tema">Tema</label>
            <label class="form-control">Planejamento Anual</label>
        </div>
        <button type="button" class="btn btn-success" onclick="location.href='{{ route('tela.login') }}'">Adicionar Participante</button>
    </form>
</x-telas>
