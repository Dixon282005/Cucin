<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
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
    <main class="p-8">
        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-8">
            <div class="flex-shrink-0 mb-6 lg:mb-0">
                <img src="https://storage.googleapis.com/a1aa/image/ZJ9bPFEIpF6VJRVZTjeS2K8kbtOekUK6kl9MR1T7oUdYAPAUA.jpg" alt="User profile picture" class="rounded-full h-40 w-40">
            </div>
            <div class="flex-grow">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-bold mb-2 text-red-600">Nombre del Usuario</h2>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Editar Perfil</button>
                </div>
                <p class="text-gray-600 mb-4">correo@ejemplo.com</p>
                <p class="text-gray-600 mb-4 text-center">Biografía breve del usuario. Aquí se puede incluir información sobre sus intereses, pasatiempos, y cualquier otra cosa que quiera compartir.</p>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h4 class="text-lg font-bold mb-2">Información Personal</h4>
                    <p class="text-sm text-gray-700"><strong>Nombre:</strong> Nombre del Usuario</p>
                    <p class="text-sm text-gray-700"><strong>Correo Electrónico:</strong> correo@ejemplo.com</p>
                    <p class="text-sm text-gray-700"><strong>Fecha de Nacimiento:</strong> 01/01/1990</p>
                    <p class="text-sm text-gray-700"><strong>Ubicación:</strong> Ciudad, País</p>
                </div>
                <h4 class="text-lg font-bold mb-2">Recetas Publicadas</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow relative">
                        <img alt="Recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="absolute top-2 right-2 px-2 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Editar</button>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow relative">
                        <img alt="Recipe image" class="rounded-lg mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/InD2zvtAdwpPPBdpZejSRiQz4CJyBsSgp8ZizJWE0t6f2OAUA.jpg" width="150"/>
                        <h5 class="text-sm font-bold mb-1">Nombre de la Receta</h5>
                        <p class="text-sm text-gray-700 mb-2">Descripción breve de la receta.</p>
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="absolute top-2 right-2 px-2 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Editar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'views/modules/footer.php';?> 
</body>
</html>
