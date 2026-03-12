<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<title>Home</title>

<style>

body{
    font-family:'Poppins', sans-serif;
    text-align:center;
    background:linear-gradient(135deg,#ffe4f0,#fff0f5);
    padding:80px;
    overflow:hidden;
}

/* background animation */

.decor{
    position:fixed;
    width:100%;
    height:100%;
    top:0;
    left:0;
    z-index:-1;
}

.decor span{
    position:absolute;
    font-size:35px;
    animation:float 10s linear infinite;
}

@keyframes float{
    0%{
        transform:translateY(100vh);
        opacity:0;
    }
    50%{
        opacity:1;
    }
    100%{
        transform:translateY(-10vh);
        opacity:0;
    }
}

/* card */

.container{
    background:white;
    width:420px;
    margin:auto;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(255,105,180,0.3);
}

h1{
    font-family:'Pacifico', cursive;
    font-size:45px;
    color:#ff1493;
}

h2{
    color:#ff69b4;
}

h3{
    color:#ff85c1;
    margin-bottom:30px;
}

.tab-link{
    display:inline-block;
    padding:15px 35px;
    border-radius:30px;
    text-decoration:none;
    background:linear-gradient(45deg,#ff69b4,#ff1493);
    color:white;
    font-size:18px;
    font-weight:bold;
    transition:0.3s;
}

.tab-link:hover{
    transform:scale(1.1);
}

</style>
</head>

<body>

<div class="decor">
<span>💗</span>
<span style="left:10%; animation-duration:8s;">🎀</span>

<span style="left:40%; animation-duration:9s;">🎀</span>

<span style="left:70%; animation-duration:7s;">🎀</span>

</div>

<div class="container">

<h1>Malak Sobhy</h1>
<h2>ID: 240103401</h2>
<h3>Course: Web and Security</h3>

<a href="{{ route('task1.form') }}" class="tab-link">Task 1</a>
<a href="{{ route('task2') }}" class="tab-link" style="margin-top:10px;">Task 2</a>

</div>

</body>
</html>