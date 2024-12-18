<x-telas title="Cadastrar Reunião">
    <h2 class="mb-4">Cadastrar Reunião</h2>
    <form action="{{ route('tela.detalhes') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" >
        </div>
        <div class="form-group mb-3">
            <label for="hora_inicio">Hora Início</label>
            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" >
        </div>
        <div class="form-group mb-3">
            <label for="hora_fim">Hora Fim</label>
            <input type="time" class="form-control" id="hora_fim" name="hora_fim" >
        </div>
        <div class="form-group mb-3">
            <label for="tema">Tema da Reunião</label>
            <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema da Reunião" >
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</x-telas>
