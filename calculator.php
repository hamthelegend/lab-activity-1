<?php

$message = "";
function add($x, $y)
{
    return $x + $y;
}

function subtract($x, $y)
{
    return $x - $y;
}

function multiply($x, $y)
{
    return $x * $y;
}

function divide($x, $y)
{
    return $x / $y;
}

function main()
{
    $is_add_set = isset($_POST['add']);
    $is_subtract_set = isset($_POST['subtract']);
    $is_multiply_set = isset($_POST['multiply']);
    $is_divide_set = isset($_POST['divide']);
    if ($is_add_set || $is_subtract_set || $is_multiply_set || $is_divide_set) {
        if (!isset($_POST['x']) || !isset($_POST['y'])) {
            return "";
        }
        $x = $_POST['x'];
        $y = $_POST['y'];
        if (!is_numeric($x)) {
            return "Your first number isn't a number.";
        }
        if (!is_numeric($y)) {
            return "Your second number isn't a number.";
        }

        if ($is_add_set) {
            return add($x, $y);
        }
        if ($is_subtract_set) {
            return subtract($x, $y);
        }
        if ($is_multiply_set) {
            return multiply($x, $y);
        }
        if ($is_divide_set) {
            if ($y == 0) {
                return "You cannot divide by zero.";
            }
            return divide($x, $y);
        }
    }
    return "";
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
                    <label for="input-x" class="form-label">First number</label>
                    <input
                            id="input-x"
                            class="form-control"
                            type="text"
                            name="x"
                            required>
                </div>
                <div class="mb-3">
                    <label for="input-y" class="form-label">Second number</label>
                    <input
                            id="input-y"
                            class="form-control"
                            type="text"
                            name="y"
                            required>
                </div>
                <div style="text-align: center;">
                    <input name="add" value="+" type="submit" class="btn btn-primary">
                    <input name="subtract" value="-" type="submit" class="btn btn-primary">
                    <input name="multiply" value="×" type="submit" class="btn btn-primary">
                    <input name="divide" value="÷" type="submit" class="btn btn-primary">
                </div>
                <div style="text-align: center;">
                    <br>
                    <?php echo $message ?>
                </div>
            </form>
        </div>
    </body>
</html>