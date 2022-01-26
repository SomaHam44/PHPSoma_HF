<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házi feladatok</title>
</head>
<body>
    <h2>Összes házi feladat</h2>
    <a href="{{ route('homeworks.create') }}"><button>Új házi feladat</button></a>
    <table>
        <tr>
        <th>Assignment title</th>
        <th>Url</th>
        <th>Feedback</th>
        <th>Point</th>
        </tr>

        <tr>
            @foreach($homeworks as $homework)
            <tr>
            <td>{{ $homework->assignment_title }}</td>
            <td>{{ $homework->url }}</td>
            <td>{{ $homework->feedback }}</td>
            <td>{{ $homework->point }}</td>
            <td>
            <form method="POST" action="{{ route('homeworks.destroy', $homework->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
            <td>
                <a href="{{ route('homeworks.edit', $homework->id) }}"><button>Szerkesztés</button></a>
            </td>

        </tr>
        @endforeach
    </table>
</body>
</html>
