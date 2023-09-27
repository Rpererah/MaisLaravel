<x-layout title="Adicionar serie">
    <form action={{route('series.store')}} method="POST">
        @csrf
    <label for="">Insira a serie:</label>
    <input type="text" name="nome" id="nome">
    <button type="submit">Enviar serie</button>
    </form>
</x-layout>