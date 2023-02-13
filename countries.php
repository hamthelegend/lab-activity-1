<?php

$details = "";

function main()
{

}

$message = main()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form
                    action=""
                    method="POST"
                    name="name-age-form">
                <div class="mb-3">
                    <label for="input_country" class="form-label">Country</label>
                    <input
                            id="input_country"
                            class="form-control"
                            type="text"
                            name="country"
                            required>
                </div>
                <div style="text-align: center;">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
                <div style="text-align: center;">
                    <br>
                    <?php echo $message ?>
                </div>
            </form>
        </div>
    </body>
</html>