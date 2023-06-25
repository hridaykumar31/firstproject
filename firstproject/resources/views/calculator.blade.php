<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
        .calculator {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            background-color:blue;
        }
    </style>
</head>     
<body>
  <a href="http://127.0.0.1:8000/history">All history</a>
    <div class="container calculator">
        <h1 style="text-align:center">Simple Calculator</h1>
        <form method="post" action="/calculate">
            @csrf
            <div class="mb-1">
                <input type="text" class="form-control" name="expression" placeholder="Enter expression">
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('7')">7</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('8')">8</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('9')">9</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('/')">/</button>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('4')">4</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('5')">5</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('6')">6</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('*')">*</button>
                </div>
            </div>
            
            <div class="row mt-1">
                <div class="col">
                    <button type="button"class="btn btn-secondary" onclick="appendCharacter('1')">1</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('2')">2</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('3')">3</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('-')">-</button>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col md-2">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('0')">0</button>
                </div>
                <div class="col md-2">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('.')">.</button>
                </div>
                <div class="col md-2">
                    <button type="button"class="btn btn-secondary" onclick="clearExpression()">C</button>
                </div>
                <div class="col md-2">
                    <button type="button" class="btn btn-secondary" onclick="appendCharacter('+')">+</button>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col">
                    <button type="button" class="btn btn-primary" onclick="calculateExpression()">Calculate</button>
                </div>
            </div>
        </form>

        @isset($result)
            <div class="mt-1">
                <h3 style="text-align:center">Result:</h3>
                <h1 style="text-align:center">{{ $result }}</h1>
            </div>
        @endisset
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <script>
        function appendCharacter(character) {
            var expressionInput = document.getElementsByName('expression')[0];
            expressionInput.value += character;
        }

        function clearExpression() {
            var expressionInput = document.getElementsByName('expression')[0];
            expressionInput.value = '';
        }

        function calculateExpression() {
            var form = document.querySelector('form');
            form.submit();
        }
    </script>
</body>
</html>
