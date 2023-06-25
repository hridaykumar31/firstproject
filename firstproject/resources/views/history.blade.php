<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<table>
        <tr>
            <td>expression</td>
            <td>result</td>
        </tr>
    </table>-->
    <a href="http://127.0.0.1:8000/">back to home page</a>

    <h1>All history</h1>

    @foreach($all_history as $calculator)
    <tr>
            <td>{{$calculator->expression}}</td>
            <td>=</td>
            <td>{{$calculator->result}}</td>
            <br> 
    </tr>
    @endforeach
    
</body>
</html>