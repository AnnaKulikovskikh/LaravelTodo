<!DOCTYPE html>
<html>
	<head>
		<title>Todo view</title>
	</head>
	<body>
        <h1>Список задач</h1>
        <p>current timestamp: {{ time() }}</p>
        <ul>
            @foreach($array as $note)
                <li>
                    <h3>{{ $note->title }}</h3>                    
                    <p>Создан {{ $note->created_at }}</p>
                    <p>Обновлен {{ $note->updated_at }}</p>
                    <p>Описание {{ $note->description }}</p>

                </li>
            @endforeach
        </ul>
	</body>
</html>