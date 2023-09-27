<x-layout title="Adicionar serie">
    <form action={{route('series.update',$series->id)}} method="POST">
        @csrf
        @method('PATCH')
    <label for="">Insira a serie:</label>
    <input type="text" name="nome" id="nome" value={{$series->nome}}>
    <button type="submit">->Enviar serie</button>
    </form>
</x-layout>