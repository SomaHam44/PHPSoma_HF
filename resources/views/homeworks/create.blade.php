<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        @endif
    <h1>New homework</h1>
    <a href="{{ route('homeworks.index') }}"><button>Vissza a főoldalra</button></a>
    <form method='POST' action="{{ route('homeworks.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Assignment title:<br>
            <input type="text" name="assignment_title" value="{{ old('assignment_title') }}">
        </div>
        <div>
            Url:<br>
            <input type="text" name="url" value="{{ old('url') }}">
        </div>
        <div>
            Feedback:<br>
            <input type="text" name="feedback" value="{{ old('feedback') }}">
        </div>
        <div>
            Point:<br>
            <input type="number" name="point" value="{{ old('point') }}">
        </div>
        <div> <br>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
