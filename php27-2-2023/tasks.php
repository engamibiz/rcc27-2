<?php
session_start();
include 'connect.php';
// حضرلي البيانات
$stmt = $conn->prepare("SELECT * FROM tasks");
// نفذلي الي حضرته
$stmt->execute();
// اجلبلي البيانات و حطها في المتغير تاسكس
$tasks = $stmt->fetchAll();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        .task {
            border-left: 15px solid;
            border-right: 15px solid;
        }
    </style>
</head>

<body>

    <div class="container">

    <?php if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                echo $error;
            }
    } ?>
        <h1 class="text-center">All tasks</h1>

        <?php foreach ($tasks as $task) { ?>
            <div class="task mt-5 shadow p-5 rounded-5  position-relative
        <?php if ($task['state'] == 0) {
            echo 'border-secondary';
        } else {
            echo 'border-success';
        }
        ?>
        
        ">
                <h2>
                    <?= $task['name'] ?>
                </h2>
                <p>
                    <?= $task['content'] ?>
                </p>
                <div class="position-absolute end-0 top-50 translate-middle-y me-3">
                    <a href="state.php?id=<?= $task['id'] ?>&state=<?= $task['state'] ?>">
                        <i class="fa-solid fa-check fa-2x me-2"></i>
                    </a>
                    <a href="edit.php?id=<?= $task['id'] ?>">
                        <i class="fa-solid fa-edit fa-2x me-2"></i>
                    </a>
                    <a href="delete.php?id=<?= $task['id'] ?>">
                        <i class="fa-solid fa-trash fa-2x me-2"></i>
                    </a>
                </div>
            </div>
        <?php } ?>

    </div>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-6 mx-auto shadow p-5">
                    <form action="insert.php" method="post">
                        <input type="text" name="name" class="form-control my-2" placeholder="Name">
                        <input type="text" name="content" class="form-control my-2" placeholder="Content">
                        <button class="btn btn-primary my-2" type="submit">Create</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>