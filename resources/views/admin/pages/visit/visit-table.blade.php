<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>visit</title>
</head>
<body>
        <H1>VISIT DATA</H1>
        @foreach($visits as $visit)
            <p>{{ $visit->f_name }}</p>
            <p>{{ $visit->m_name }}</p>
        @endforeach

</body>
</html>
