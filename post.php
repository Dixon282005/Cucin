<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Receta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="flex items-center justify-between p-4 shadow-md bg-white">
        <div class="flex items-center">
            <img src="https://storage.googleapis.com/a1aa/image/1eWRQPoUejpstEDypqVAbQwMEXMaviwDScIHXxUOUlnB3OAUA.jpg" alt="UCIN logo" class="mr-2 h-10">
            <span class="text-red-600 text-xl font-bold">UCIN</span>
        </div>
        <nav class="flex items-center space-x-4">
            <a class="text-black hover:text-red-600" href="#">Explorar</a>
            <a class="text-black hover:text-red-600" href="#">Inicio</a>
            <a class="text-black hover:text-red-600" href="#">Publicar</a>
            <a class="text-black hover:text-red-600 flex items-center" href="#">
                <img src="https://storage.googleapis.com/a1aa/image/ZJ9bPFEIpF6VJRVZTjeS2K8kbtOekUK6kl9MR1T7oUdYAPAUA.jpg" alt="User profile picture" class="rounded-full mr-2 h-6 w-6">
                Perfil
            </a>
        </nav>
    </header>
    <main class="p-4 sm:p-8">
        <h1 class="text-3xl font-bold mb-6 text-red-600">Publicar Receta</h1>
        <form class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="recipe-title" class="block text-sm font-medium text-gray-700">Título de la Receta</label>
                <input type="text" id="recipe-title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="Ej. Ensalada César">
            </div>
            <div class="mb-4">
                <label for="recipe-description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea id="recipe-description" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="Descripción breve de la receta"></textarea>
            </div>
            <div class="mb-4">
                <label for="recipe-category" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select id="recipe-category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm">
                    <option>Vegetarianas</option>
                    <option>Carnívoras</option>
                    <option>Almuerzos</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="recipe-type" class="block text-sm font-medium text-gray-700">Tipo de Platillo</label>
                <select id="recipe-type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm">
                    <option>Ensalada</option>
                    <option>Postre</option>
                    <option>Entrada</option>
                    <option>Plato Principal</option>
                    <option>Bebida</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="recipe-ingredients" class="block text-sm font-medium text-gray-700">Ingredientes</label>
                <textarea id="recipe-ingredients" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="Lista de ingredientes"></textarea>
            </div>
            <div class="mb-4">
                <label for="recipe-steps" class="block text-sm font-medium text-gray-700">Pasos</label>
                <textarea id="recipe-steps" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="Pasos para preparar la receta"></textarea>
            </div>
            <div class="mb-4">
                <label for="recipe-image" class="block text-sm font-medium text-gray-700">Imagen de la Receta</label>
                <input type="file" id="recipe-image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-600 file:text-white hover:file:bg-red-700">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Publicar Receta</button>
            </div>
        </form>
    </main>
    <footer class="bg-white p-4 shadow-md mt-8">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
            <div class="text-gray-600 mb-4 sm:mb-0">
                &copy; 2023 UCIN. Todos los derechos reservados.
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>