<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style>
body {
    font-family: 'Cursive', sans-serif; /* خط حلو */
    text-align:center;
    background:#fff0f5;
    padding:50px;
}
h1, h2, h3 {
    color:#ff1493;
}
.tab-link {
    display:inline-block;
    margin-top:20px;
    padding:15px 30px;
    border-radius:10px;
    text-decoration:none;
    background:#ff69b4;
    color:#fff;
    font-size:18px;
    font-weight:bold;
    transition: 0.3s;
}
.tab-link:hover {
    background:#ff1493;
}
</style>
</head>
<body>

<h1>Malak Sobhy</h1>
<h2>ID: 240103401</h2>
<h3>Course: Web and Security</h3>

<a href="{{ route('task1.form') }}" class="tab-link">Task 1</a>

</body>
</html>