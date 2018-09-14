<html>
<head>
    <title>{{ $user->name }}</title>
</head>
<body>
    <div>Página de exemplo</div>
    <div>O número é: {{ $numero }}</div>

    <div>ID: {{ $user->id }}, nome: {{ $user->name }}, sobrenome: {{ $user->last_name }}</div>

    @if ($numero > 30)
        <div>O número é maior que 30</div>
    @else
        <div>O número não é maior que 30</div>
    @endif

    <ul>
    @foreach ($numArray as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>
</body>
</html>
