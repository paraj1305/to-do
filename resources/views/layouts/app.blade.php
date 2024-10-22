<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Manager')</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
          body.dark-mode .list-group-item {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        body.dark-mode .list-group-item:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        body.dark-mode .list-group-item {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        body.dark-mode .list-group-item:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        /* Global Light/Dark Mode Styles */
        body {
            transition: background-color 0.5s, color 0.5s;
        }

        .light-mode {
            background-color: #f8f9fa;
            color: #212529;
        }

        .dark-mode {
            background-color: #121212;
            color: white;
        }

        /* Toggle Button Styles */
        .toggle-theme-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background: transparent;
            border: none;
            font-size: 1.5rem;
            color: inherit;
            cursor: pointer;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            transition: background-color 0.5s;
        }

        .light-mode .container {
            background: rgba(0, 0, 0, 0.1);
        }

        .dark-mode .container {
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-primary, .btn-danger, .btn-success, a {
            color: white !important;
        }
    </style>
</head>
<body>

    <!-- Theme Toggle Button -->
    <button class="toggle-theme-btn" id="toggle-theme-btn" onclick="toggleTheme()">
        <i class="fas fa-adjust"></i>
    </button>

    <!-- Main Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script>
        // Function to toggle the theme and save the choice in localStorage
        function toggleTheme() {
            const body = document.body;
            const isDarkMode = body.classList.toggle('dark-mode');
            if (isDarkMode) {
                localStorage.setItem('theme', 'dark');
                body.classList.remove('light-mode');
            } else {
                body.classList.add('light-mode');
                localStorage.setItem('theme', 'light');
            }
        }

        // Check localStorage for theme on page load and apply it
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.add('light-mode');
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
