<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de la Receta</title>
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
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-col lg:flex-row lg:space-x-8">
                <img src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" alt="Recipe image" class="rounded-lg mb-4 lg:mb-0 lg:w-1/3">
                <div class="flex-grow">
                    <h1 class="text-3xl font-bold mb-2 text-red-600">Nombre de la Receta</h1>
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/a1aa/image/ZJ9bPFEIpF6VJRVZTjeS2K8kbtOekUK6kl9MR1T7oUdYAPAUA.jpg" alt="User profile picture" class="rounded-full h-10 w-10 mr-2">
                        <span class="text-sm text-gray-700">Publicado por: Usuario1</span>
                    </div>
                    <p class="text-gray-700 mb-4">Descripción detallada de la receta. Aquí se puede incluir información sobre los orígenes de la receta, consejos para su preparación, y cualquier otra información relevante.</p>
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-gray-700">(4.5 de 5 estrellas)</span>
                    </div>
                    <div class="mb-4">
                        <span class="text-sm font-bold text-gray-700">Categoría:</span>
                        <span class="text-sm text-gray-700 ml-2">Vegetarianas</span>
                    </div>
                    <div>
                        <span class="text-sm font-bold text-gray-700">Tipo de Platillo:</span>
                        <span class="text-sm text-gray-700 ml-2">Ensalada</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Ingredientes</h2>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Ingrediente 1</li>
                        <li>Ingrediente 2</li>
                        <li>Ingrediente 3</li>
                        <li>Ingrediente 4</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Pasos</h2>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <ol class="list-decimal list-inside text-gray-700">
                        <li>Paso 1</li>
                        <li>Paso 2</li>
                        <li>Paso 3</li>
                        <li>Paso 4</li>
                    </ol>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Comentarios</h2>
                <div class="space-y-4">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/ZJ9bPFEIpF6VJRVZTjeS2K8kbtOekUK6kl9MR1T7oUdYAPAUA.jpg" alt="User profile picture" class="rounded-full h-8 w-8 mr-2">
                            <span class="text-sm font-bold">Usuario2</span>
                        </div>
                        <p class="text-gray-700">Comentario del usuario sobre la receta.</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/ZJ9bPFEIpF6VJRVZTjeS2K8kbtOekUK6kl9MR1T7oUdYAPAUA.jpg" alt="User profile picture" class="rounded-full h-8 w-8 mr-2">
                            <span class="text-sm font-bold">Usuario3</span>
                        </div>
                        <p class="text-gray-700">Comentario del usuario sobre la receta.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700">Añadir un comentario</label>
                    <textarea id="comment" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm" placeholder="Escribe tu comentario aquí..."></textarea>
                    <button class="mt-2 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Publicar Comentario</button>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Platillos Similares</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow">
                        <img alt="Similar recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow">
                        <img alt="Similar recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow">
                        <img alt="Similar recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow">
                        <img alt="Similar recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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