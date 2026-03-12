<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        .navbar {
            background: linear-gradient(135deg, #ff69b4, #ff1493) !important;
            padding: 0.8rem 1.5rem;
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.4);
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            transition: all 0.3s ease;
            margin: 0 3px;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.25);
            transform: scale(1.05);
        }

        .navbar-nav .nav-link.active {
            background-color: white;
            color: #ff1493 !important;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand">
        <div class="container-fluid">
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getProducts">🛍️ Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/viewForm">➕ Add Product</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>