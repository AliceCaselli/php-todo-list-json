<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- vue  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>


<div id="app">

    <div class="container pt-5">

        <ul>
            <li v-for="(todo, index) in todos" :class="todo.done ? 'done' : ''">
                <span @click="deleteTodo(index)" class="delete">X</span> - <span @click="toggleTodo(index)">{{ todo.text }}</span>
            </li>
        </ul>

        <hr>

        <div class="d-flex align-center">
            <input v-model="newTodo" type="text" placeholder="todo da aggiungere" class="me-3" @keyup.enter="addTodo()">
            <button class="btn btn-outline-primary" @click="addTodo()">aggiungi</button>
        </div>

    </div>

</div>  
    
    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- my js  -->
    <script src="js/script.js"></script>
</body>
</html>