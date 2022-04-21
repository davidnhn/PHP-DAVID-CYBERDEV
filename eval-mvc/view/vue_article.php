<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
<form action="" method="post">
  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
      <div class="space-y-4">
        <div>
          <label for="title" class="text-lx font-serif">Title:</label>
          <input type="text" placeholder="title" id="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" name="name"/>
        </div>
        <div>
          <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
          <textarea id="description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md" name="decription"></textarea>
        </div>
        <div>
          <label for="price" class="text-lx font-serif">Price:</label>
          <input type="text" placeholder="price" id="price" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" name="price" />
        </div>
        <div>
          <label for="email" class="text-lx font-serif">Email:</label>
          <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" name="email"/>
        </div>
        <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600" name="valider" >ADD POST</button>
      </div>
    </div>
  </div>
</form>
</body>
</html>