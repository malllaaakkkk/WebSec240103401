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
input { padding:5px; margin:5px; border-radius:5px; border:1px solid #ccc; }
</style>
</head>
<body>
<h1>Task 1: Number Operations</h1>

<div>
    <button onclick="showTab('evenOdd')">Even / Odd</button>
    <button onclick="showTab('multiplication')">Multiplication Table</button>
</div>

<!-- Even / Odd -->
<div id="evenOdd" class="tab">
    <h3>POST Form</h3>
    <form action="{{ route('check.evenodd') }}" method="POST">
        @csrf
        <input type="number" name="number" placeholder="Enter number" required>
        <button type="submit">Check</button>
    </form>
    @if(session('evenOddResult'))
        <div class="result">{{ session('evenOddResult') }}</div>
    @endif

    <h3>From URL</h3>
    <input type="number" id="evenNumber" placeholder="Enter number">
    <button onclick="goEvenOdd()">Check via URL</button>
</div>

<!-- Multiplication Table -->
<div id="multiplication" class="tab">
    <h3>POST Form</h3>
    <form action="{{ route('multiplication.table') }}" method="POST">
        @csrf
        <input type="number" name="number" placeholder="Enter number" required>
        <button type="submit">Show Table</button>
    </form>
    @if(session('multiplicationTable'))
        <div class="result">
            @foreach(session('multiplicationTable') as $line)
                {{ $line }} <br>
            @endforeach
        </div>
    @endif

    <h3>From URL</h3>
    <input type="number" id="mulNumber" placeholder="Enter number">
    <button onclick="goMultiplication()">Show Table via URL</button>
</div>

<script>
function showTab(id){
    document.querySelectorAll('.tab').forEach(t=>t.style.display='none');
    document.getElementById(id).style.display='block';
}
showTab('evenOdd');

function goEvenOdd(){
    const n = document.getElementById('evenNumber').value;
    if(n) window.location.href = `/even-odd/${n}`;
}
function goMultiplication(){
    const n = document.getElementById('mulNumber').value;
    if(n) window.location.href = `/multiplication/${n}`;
}
</script>
</body>
</html>