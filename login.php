<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .bg-cover {
            background-image: url('https://storage.googleapis.com/a1aa/image/1eWRQPoUejpstEDypqVAbQwMEXMaviwDScIHXxUOUlnB3OAUA.jpg');
            background-size: cover;
            background-position: center;
        }
        .bg-blur {
            backdrop-filter: blur(10px);
        }
        .hover-link:hover {
            color: #e3342f;
        }
        .hover-button:hover {
            background-color: #e3342f;
            transform: scale(1.05);
            transition: transform 0.2s, background-color 0.2s;
        }
        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-cover flex flex-col min-h-screen">
    <header class="bg-white shadow-md w-full sticky-header">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="Cucin logo" class="mr-2" height="40"
                    src="https://storage.googleapis.com/a1aa/image/siA22meMPazEZKDEZm3YuHozk1aPqx1H3n4zuTXueOMkfbvnA.jpg"
                    width="40" />
                <span class="text-xl font-bold">
                    Cucin
                </span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input class="border rounded-full px-4 py-2 pl-10" placeholder="Buscar recetas..." type="text" />
                    <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                </div>
                <nav class="hidden md:flex space-x-4">
                    <a class="text-gray-700 hover-link" href="#">
                        Explorar
                    </a>
                    <a class="text-gray-700 hover-link" href="#">
                        Nosotros
                    </a>
                </nav>
                <button class="bg-gray-500 text-white px-4 py-2 rounded-full hover-button">
                    <a href="login.php">Iniciar Sesión</a>
                </button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-full hover-button">
                    Registrarse
                </button>
            </div>
        </div>
    </header>

    <div class="flex-grow flex items-center justify-center mt-8 mb-8 px-4">
        <div class="bg-white bg-blur p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex justify-center mb-6">
                <img src="https://storage.googleapis.com/a1aa/image/1eWRQPoUejpstEDypqVAbQwMEXMaviwDScIHXxUOUlnB3OAUA.jpg" alt="UCIN logo" class="h-12">
            </div>
            <h2 class="text-2xl font-bold mb-6 text-center text-red-600">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="correo@ejemplo.com">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="********">
                </div>
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 text-red-600 focus:ring-red-600 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Recuérdame</label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-red-600 hover:text-red-500">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Iniciar Sesión</button>
                </div>
                <div class="mb-4">
                    <button type="button" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fab fa-facebook-f mr-2"></i> Iniciar Sesión con Facebook
                    </button>
                </div>
                <div>
                    <button type="button" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400">
                        <i class="fab fa-google mr-2"></i> Iniciar Sesión con Google
                    </button>
                </div>
            </form>
            <p class="mt-6 text-center text-sm text-gray-600">
                ¿No tienes una cuenta? 
                <a href="#" class="font-medium text-red-600 hover:text-red-500">Regístrate</a>
            </p>
        </div>
    </div>

    <footer class="bg-white shadow-md w-full">
        <div class="container mx-auto py-4 px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-700 mb-4 md:mb-0">
                © 2025 Cucin. Todos los derechos reservados.
            </div>
            <nav class="space-x-4">
                <a class="text-gray-700 hover-link" href="#">
                    Privacidad
                </a>
                <a class="text-gray-700 hover-link" href="#">
                    Contacto
                </a>
                <a class="text-gray-700 hover-link" href="#">
                    Términos
                </a>
                <a class="text-gray-700 hover-link" href="#">
                    Blog
                </a>
            </nav>
        </div>
    </footer>
</body>
</html>
