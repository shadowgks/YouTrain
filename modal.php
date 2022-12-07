<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Begin Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- End Bootstrap css -->
    <!-- Begin Bootstrap icon -->
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css" />
    <!-- End Bootstrap icon -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>YouTrain</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->

    <form action="modal.php" method="post" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <!--this input is used to stock the id -->
                        <input type="hidden" name="id">
                    </div>
                    <div>
                        <!--this input is used to stock the id_resirvation -->
                        <input type="hidden" name="id_reservation">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">number</label>
                        <input type="text" class="form-control" name="num">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">capacite</label>
                        <input type="text" class="form-control" name="capacite">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">departure date</label>
                        <input type="date" class="form-control" name="date_departe">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">arrival date</label>
                        <input type="date" class="form-control" name="date_arrivee">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="delete">delete</button>
                    <button type="submit" class="btn btn-warning" data-bs-dismiss="modal" name="update">update</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="save">Save</button>
                </div>
            </div>
        </div>
    </form>

    <!-- js links -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script class="assets/js/scripts.js"></script>
</body>

</html>