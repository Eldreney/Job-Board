<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   @foreach ($jobs as  $job)
       <h2>{{ $job['title']}}</h2>
   @endforeach
   
</body>
</html>