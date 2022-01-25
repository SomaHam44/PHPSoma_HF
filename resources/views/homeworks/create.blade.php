<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New homework</h1>
    <form method='POST' action="{{ route('homeworks.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Assignment title:<br>
            <input type="text" name="assignment_title">
        </div>
        <div>
            Url:<br>
            <input type="link" name="link">
        </div>
        <div>
            Feedback:<br>
            <input type="text" name="feedback">
        </div>
        <div>
            Point:<br>
            <input type="number" name="point">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
