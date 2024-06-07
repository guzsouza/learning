<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="{{route('formSubmit')}}" method="POST">
        @csrf
        <div class="input-group">
            <span class="input-group-text">First and last name</span>
            <input type="text" name="first_name" aria-label="First name" class="form-control">
            <input type="text" name="last_name" aria-label="Last name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>
