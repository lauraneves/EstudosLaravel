<form action="{{ route('josues.store') }}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="number" name="idade">
    <button type="submit">Botão</button>
</form>