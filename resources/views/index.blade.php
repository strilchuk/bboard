<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="my-3 text-center">Объявления</h1>
    @if(count($bbs)>0)
        <table class="table table-striped table-berderless">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td><h4>{{$bb->title}}</h4></td>
                    <td>{{$bb->price}}</td>
                    <td>
                        <a href="/{{$bb->id}}/">Подробнее...</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
