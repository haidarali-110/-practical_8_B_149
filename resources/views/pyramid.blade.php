<!DOCTYPE html>
<html>
<head>
    <title>Pyramid Generator</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        input, button {
            padding: 10px;
            margin: 5px;
        }

        .output {
            font-family: monospace;
            white-space: pre;
            text-align: left;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>Pyramid Generator</h2>

<form method="POST" action="/generate">
    @csrf

    <input type="text" name="symbol" placeholder="Enter Symbol" required>
    <input type="number" name="rows" placeholder="Enter Rows" required>

    <br>
    <button type="submit">Generate</button>
</form>

@if(isset($half) && isset($full))

    <h3>Half Pyramid:</h3>
    <div class="output">{{ $half }}</div>

    <h3>Full Pyramid:</h3>
    <div class="output">{{ $full }}</div>

@endif

</body>
</html>
