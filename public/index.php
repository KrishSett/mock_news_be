<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Index Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header h2 {
            margin: 0.5rem 0 0;
            font-weight: 300;
            font-size: 1.25rem;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }

            header h2 {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <h2>Your Subtitle Goes Here</h2>
    </header>

    <main style="flex: 1; padding: 2rem; text-align: center;">
        <p>This is a simple and styled homepage. Feel free to customize it further.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </footer>
</body>
</html>
