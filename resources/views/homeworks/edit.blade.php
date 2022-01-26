<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Szerkesztés</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    @endif
     <div>
          <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
               @method('PATCH')
               @csrf
               <div>
                    Assignment title <br> <input type="text" name="assignment_title" value="{{ $homework->assignment_title }}">

               </div>
               <div>
                    Url <br> <input type="text" name="url" value="{{ $homework->url }}">
               </div>
               <div>
                    Feedback: <br>
                    <input type="text" name="feedback" value="{{ $homework->feedback }}">
               </div>
               <div>
                    Point: <br>
                    <input type="number" name="point" value="{{ $homework->point }}">
               </div>
               <div> <br>
                    <input type="submit" value="Szerkesztés">
               </div>
          </form>
     </div>
</body>
</html>
