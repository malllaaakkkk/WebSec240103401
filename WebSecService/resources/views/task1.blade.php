<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <style>
        body { font-family: Arial; text-align:center; background:#fff0f5; padding:30px;}
        .tab { display:none; padding:20px; background:#fff; border-radius:10px; margin-top:10px; }
        button { padding:10px 20px; margin:5px; border:none; border-radius:5px; cursor:pointer; background:#ff69b4; color:#fff;}
        button:hover { background:#ff1493;}
        .result { margin-top:15px; font-weight:bold; color:#ff1493; }
    </style>
</head>
<body>
    <h1>Task 1: Number Operations</h1>

    <div>
        <button onclick="showTab('evenOdd')">Even / Odd</button>
        <button onclick="showTab('multiplication')">Multiplication Table</button>
    </div>

    <!-- Even / Odd Tab -->
    <div id="evenOdd" class="tab">
        <form action="{{ route('check.evenodd') }}" method="POST">
            @csrf
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Check</button>
        </form>
        @if(session('evenOddResult'))
            <div class="result">{{ session('evenOddResult') }}</div>
        @endif
    </div>

    <!-- Multiplication Tab -->
    <div id="multiplication" class="tab">
        <form action="{{ route('multiplication.table') }}" method="POST">
            @csrf
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Show Table</button>
        </form>
        @if(session('multiplicationTable'))
            <div class="result">
                @foreach(session('multiplicationTable') as $line)
                    {{ $line }} <br>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        function showTab(id){
            document.querySelectorAll('.tab').forEach(t => t.style.display='none');
            document.getElementById(id).style.display='block';
        }
        // show first tab by default
        showTab('evenOdd');
    </script>
</body>
</html>