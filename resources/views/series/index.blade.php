<x-layout title="Ver series">
    <ul>
        @foreach($series as $serie)
            <li>{{$serie->nome}}</li>
            <form action={{route('series.destroy',$serie->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button>X</button>
            </form>
            <form action={{route('series.edit',$serie->id)}}>
                <button type="submit">editar</button>
            </form>
        @endforeach
        
        </ul>
</x-layout>