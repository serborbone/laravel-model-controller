<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

  </head>

  <body>
      <ul>
        @foreach ($movies as $movie)
          <li> 
              {{-- TITLE --}}
              <div class="title"> 
                <span>Title:</span> {{ $movie['title'] }} 
              </div>
              {{-- ORIGINAL TITLE --}}
              <div class="original-title"> 
                <span>Original Title:</span> {{ $movie['original_title']}} 
              </div>
              {{-- NATIONALITY --}}
              <div class="nationality"> 
                <span>Nationality:</span> {{ $movie['nationality']}} 
              </div>
              {{-- RELEASE DATE --}}
              <div class="release"> 
                <span>Release Date:</span> {{ $movie['date']}} 
              </div>
              {{-- VOTE --}}
              <div class="vote"> 
                <span>Vote:</span> {{ $movie['vote']}} 
              </div>
          </li>    
        @endforeach
      </ul>
  </body>

</html>