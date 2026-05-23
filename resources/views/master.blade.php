<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - RindiAlv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
    
        body {
            font-family: 'Space+Grotesk', sans-serif;
            background-color: #121212;
            overflow-x: hidden;
        }
        .app-container {
            display: flex;
            min-height: 100vh;
        }
        .main-content {
            flex-grow: 1;
            background-color: #121212;
            padding-left: 20px;
            padding-right: 20px;
        }
        .text-accent {
            color: #bc13fe;
        }
    </style>
</head>
<body class="text-white">

    <div class="app-container">
        @include('navbar')

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>