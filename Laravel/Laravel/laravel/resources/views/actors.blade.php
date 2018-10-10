<h1>Titulo</h1>

<ul>
    
    <form action="{{route('actor.search')}}" method="GET">
        <input type="text" name="search" id="">
        <input type="submit" name="submit">
    </form>
    
    @foreach ($actors as $actor)
    <li>
    <a href="{{route('actor.show', $actor->id)}}"> {{$actor->getNombreCompleto()}} </a>
    </li>

    @endforeach

    
</ul>
</h3>