<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Cucin
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    
</head>

<body class="font-roboto">
    <!-- Header -->
    <?php include 'views/modules/header.php';?> 


    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-6">



        <!-- Welcome Section -->
        <section class="p-8 rounded-lg flex flex-col md:flex-row items-center justify-between"
            style="background-color: #f1e8e8;">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    ¡Bienvenidos a la nueva forma de compartir tu arte
                    <span class="text-red-500">
                        culinario!
                    </span>
                </h1>
                <button class="mt-6 bg-red-500 text-white px-8 py-3 rounded-full text-lg hover-button">
                    ¡Comenzar!
                </button>
            </div>
            <img alt="Chef" class="rounded-full w-1/2 md:w-1/4 lg:w-1/5 mt-4 md:mt-0" height="150"
                src="https://storage.googleapis.com/a1aa/image/G56F3pU7FDaOKJ0vpS8mujklj34vVXY663qrVdUDzCb6f27JA.jpg"
                width="150" />
        </section>


        <!-- Image Gallery -->
        <section class="mt-8">
            <h1 class="text-3xl font-bold mb-4">
                Algunos de nuestros platillos
            </h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4  hover:shadow-lg transition-shadow">
                    <img alt="Dish 1" class="rounded-lg mb-4 mx-auto" height="200"
                        src="https://storage.googleapis.com/a1aa/image/m6jov1R560KmNRWCSfpfNBDF3JfdbjDitefWLL6sVZAt8v9eE.jpg"
                        width="300" />
                    <h2 class="text-xl font-bold">
                        Platillo 1
                    </h2>
                    <p class="text-gray-700">
                        Descripción del platillo 1.
                    </p>
                    <div class="flex items-center mt-2">
                        <img alt="User 1" class="rounded-full w-8 h-8 mr-2" height="40"
                            src="https://storage.googleapis.com/a1aa/image/vxkf471pYM2hBSXrSBxTJOIuC41HIx07x9ab3XlguXhtD37JA.jpg"
                            width="40" />
                        <span class="text-yellow-500">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                        <span class="ml-2 text-gray-600">
                            Publicado por Usuario1
                        </span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-4  hover:shadow-lg transition-shadow">
                    <img alt="Dish 2" class="rounded-lg mb-4 mx-auto" height="200"
                        src="https://storage.googleapis.com/a1aa/image/G9xwTzQHKSpOMFYLyBaybXrcE7UcrZiejSg1U7UczBY2ft3TA.jpg"
                        width="300" />
                    <h2 class="text-xl font-bold">
                        Platillo 2
                    </h2>
                    <p class="text-gray-700">
                        Descripción del platillo 2.
                    </p>
                    <div class="flex items-center mt-2">
                        <img alt="User 2" class="rounded-full w-8 h-8 mr-2" height="40"
                            src="https://storage.googleapis.com/a1aa/image/IZwT8ROeoJydV6pfi8Fhup5WA79Dz2tLrmxuChkyRDUcHu3TA.jpg"
                            width="40" />
                        <span class="text-yellow-500">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                        </span>
                        <span class="ml-2 text-gray-600">
                            Publicado por Usuario2
                        </span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-4  hover:shadow-lg transition-shadow">
                    <img alt="Dish 3" class="rounded-lg mb-4 mx-auto" height="200"
                        src="https://storage.googleapis.com/a1aa/image/mjDOjAATOd6YA5ieKvnAaEbfFaCbsilpiDWHERVtacAnfbvnA.jpg"
                        width="300" />
                    <h2 class="text-xl font-bold">
                        Platillo 3
                    </h2>
                    <p class="text-gray-700">
                        Descripción del platillo 3.
                    </p>
                    <div class="flex items-center mt-2">
                        <img alt="User 3" class="rounded-full w-8 h-8 mr-2" height="40"
                            src="https://storage.googleapis.com/a1aa/image/v4S7DBpQYwIbJJJ1VARF0tZfYL476JXR6dF4wffL13j8OcvnA.jpg"
                            width="40" />
                        <span class="text-yellow-500">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star-half-alt">
                            </i>
                        </span>
                        <span class="ml-2 text-gray-600">
                            Publicado por Usuario3
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section -->
        <section class="mt-8 flex flex-col md:flex-row items-center bg-white p-8 rounded-lg shadow-md">
            <img alt="Cooking ingredients" class="rounded-lg md:w-1/2" height="300"
                src="https://storage.googleapis.com/a1aa/image/updated_image.jpg" width="400" />
            <div class="md:ml-8 mt-4 md:mt-0 md:w-1/2 text-center">
                <h2 class="text-4xl font-bold text-red-500">
                    Nosotros
                </h2>
                <p class="mt-4 text-gray-700 text-lg font-bold">
                    Somos una empresa creada para facilitar a los amantes de la cocina una manera de conectar, crear y
                    compartir sus recetas. Nuestro objetivo es proporcionar una plataforma donde puedas encontrar
                    <span class="text-red-500">
                        inspiración culinaria
                    </span>
                    , compartir tus propias creaciones y aprender de otros apasionados de la cocina. Bienvenidos a
                    Cucin, tu
                    <span class="text-red-500">
                        comunidad culinaria
                    </span>
                    .
                </p>
                <button class="mt-4 bg-red-500 text-white px-6 py-2 rounded-full hover-button">
                    A conocer
                </button>
            </div>
        </section>
        <!-- Registration Section -->
        <section
            class="mt-8 bg-gray-100 p-8 rounded-lg flex flex-col md:flex-row items-center justify-between relative">
            <img alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20"
                src="https://storage.googleapis.com/a1aa/image/registration_background.jpg" />
            <div class="relative z-10 md:w-1/2 text-center">
                <h2 class="text-5xl font-bold">
                    ¡Regístrate para empezar a encontrar tus
                    <span class="text-red-500">
                        recetas!
                    </span>
                </h2>
            </div>
            <div class="relative z-10 bg-white p-8 rounded-lg shadow-md md:w-1/2 mt-4 md:mt-0">
                <img alt="Cucin logo" class="mx-auto mb-4" height="50"
                    src="https://storage.googleapis.com/a1aa/image/siA22meMPazEZKDEZm3YuHozk1aPqx1H3n4zuTXueOMkfbvnA.jpg"
                    width="50" />
                <h3 class="text-3xl font-bold mb-4 text-center">
                    ¡Te damos la bienvenida a
                    <span class="text-red-500">
                        Cucin!
                    </span>
                </h3>


                <form class="space-y-4" method="POST" action="">
                    <?php
                    include("config/db.php");
                    include("controllers/db.php");
                    ?>
                    <div>
                        <label class="block text-gray-700" for="username">Nombre de usuario</label>
                        <input
                            class="w-full border rounded-lg px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                            name="username" id="username" placeholder="Ingresa tu nombre de usuario" type="text"
                            required />
                    </div>
                    <div>
                        <label class="block text-gray-700" for="email">
                            Correo electrónico
                        </label>
                        <input
                            class="w-full border rounded-lg px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                            name="email" id="email" placeholder="Ingresa tu correo electrónico" type="email" required />
                    </div>
                    <div>
                        <label class="block text-gray-700" for="password">
                            Contraseña
                        </label>
                        <input
                            class="w-full border rounded-lg px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                            id="password" name="password" placeholder="Ingresa tu contraseña" type="password"
                            required />
                    </div>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-full w-full hover-button" name="SignUp" type="submit">
                        Registrarse
                    </button>
                    <div class="flex justify-between mt-4">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover-button w-1/2 mr-2">
                            Registrarse con Facebook
                        </button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded-full hover-button w-1/2 ml-2">
                            Registrarse con Google
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include 'views/modules/footer.php';?> 
</body>

</html>