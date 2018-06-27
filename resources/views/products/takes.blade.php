<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
@foreach($takes as $take)
<p>{{ $take->take_number }}</p>
<p>{{ $take->judge }}</p>
<p>{{ $take->memo }}</p>
<p>{{ $take->cut_id }}</p>
@endforeach
  </body>
</html>