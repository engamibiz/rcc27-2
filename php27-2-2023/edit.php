<?php 
if(isset($_GET['id'])){
    $id= $_GET['id'];
    include 'connect.php';
    $stmt=$conn->prepare("SELECT * FROM tasks WHERE id='$id'");
    $stmt->execute();
    $task = $stmt->fetch();
    // fetchAll() more then one record   [ [] , [] ] 
    // fecth() get one record  [] 

}
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

  
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-6 mx-auto shadow p-5">
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="text" value="<?= $task['name'] ?>" name="name" class="form-control my-2" placeholder="Name">
                        <input type="text" value="<?= $task['content'] ?>" name="content" class="form-control my-2" placeholder="Content">
                        <button class="btn btn-primary my-2" type="submit">Create</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>