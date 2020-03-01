
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('add')}}">  
        @csrf
    <div class="form-group">
        <label >telp</label>
        <input type="text" name="name" class="form-control" required>
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <label>firstname</label>
        <input type="text" name="firstname" class="form-control" required>
        @error('firstname')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
<form>
  