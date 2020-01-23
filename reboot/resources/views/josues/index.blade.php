<h1>Josue</h1>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam odio quod quidem in tempora, porro, cupiditate necessitatibus corporis itaque exercitationem pariatur eveniet omnis. Alias quisquam dolor expedita quibusdam quasi laborum!
</p>

<ul>
    @foreach ($josues as $josue)
    <li> {{$josue->nome}} </li>
    <li> {{$josue->idade}} </li>
    @endforeach
</ul>

<a href="{{route('josues.create')}}">Botao2</a>