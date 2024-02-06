<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <title>Document UNO</title>
</head>
<body class="bg-blue-400">
    <form action="" class="bg-white w-80 mx-auto mt-8 rounded-lg p-6">
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md disabled:bg-red-200" type="text" placeholder="Nombre" disabled>
        
        <input class="border border-gray-300 w-full px-3 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-purple-600 invalid:focus:ring-red-400 peer" type="email" placeholder="Correo">
        <p class="text-red-400 hidden peer-invalid:block">El correo es inválido</p>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 mt-4 rounded-md" type="password" placeholder="Contraseña">
        
        <input class="bg-blue-500 w-full py-2 text-white rounded-md cursor-pointer hover:bg-blue-400" type="submit" placeholder="Ingresar">
    </form>
   
</body>
</html>