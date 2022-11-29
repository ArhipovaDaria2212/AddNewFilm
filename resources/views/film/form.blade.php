<!-- <form action="/result">
    <input name="title">
    <input name="description">
    <input name="director">
    <input name="created_at">
    <input name="genres">
    <input type="submit">
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Film</title>
  <style>
    body{
      background-color: #a1b5a1;
      color: #fff;
      text-align: center;
      padding: 100px 0 0 0;
    }
     form{
      align-items: center;
      display: flex; 
      flex-flow:column;
      gap: 10px;
      padding: 20px 0 0 0;
      font-size: 20px;
     }
     ::placeholder, select, input,
      select:focus, input:focus {
      color: #fff;
      background: #a1b5a1;
      border: 2px solid #fff;
      font-size: 15px;
     }
     input,select{
      min-width: 300px;
      height: 100%;
     }
  </style>
</head>
<body>
  <h1>Add new film</h1>
<form action="/result" >
	<input name="title" placeholder="название фильма">
	<input name="description" type="textarea" placeholder="описание фильма">
  <label for="director">Режисер</label>
  <select name="director" id="director">
  @foreach($producers as $producer)
  <option value="{{$producer->id}}">{{$producer->name}}</option>
  @endforeach
  </select>
  <label for="created">Дата релиза</label>
  <input name="created_at" type="date" id="created">
  <label for="genres"> Жанры</label>
  <select name="genres[]" multiple size=3 id="genres">
  @foreach($genres as $genre)
  <option value="{{$genre->id}}">{{$genre->title}}</option>
  @endforeach
  </select>
 
	<input type="submit">
</form>
</body>
</html>


