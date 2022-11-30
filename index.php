<!doctype html>
<html lang="en">

<head>
    <title>ToDoList/Php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-color: #001635;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    <div id="app">
        <main id="site_main">
            <div class="container d-flex flex-column align-items-center">

                <h1 class="text-white">TODO LIST</h1>
                <div class="col-4  text-center">
                    <ul class="list-unstyled list-group list-group-flush">
                        <li v-for="todo in todo" class="list-group-item">{{todo.title}}</li>
                    </ul>
                    <form action="server.php" method="post">
                        <label for="todo" class="form-label text-white">Aggiungi Argomento</label>
                        <div class=" d-flex ">
                            <input type="text" name="todo" id="todo" class="form-control rounded-1  " placeholder="Add a new todo" aria-describedby="todoHelper">

                            <button type="submit" class="p-3 btn btn-prymary text-warning bg-dark border border-warning">Inserisci</button>
                        </div>
                    </form>
                </div>



            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>