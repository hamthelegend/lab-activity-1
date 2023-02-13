<?php
$message = array(
        "country" => "",
        "capital" => "",
        "description" => ""
);

function main()
{
    $countries = array(
            "United States" => array(
                    "capital" => "Washington D.C.",
                    "description" => "The world's largest economy and a global military power."
            ),
            "China" => array(
                    "capital" => "Beijing",
                    "description" => "A communist state with a rapidly growing economy and the world's largest population."
            ),
            "India" => array(
                    "capital" => "New Delhi",
                    "description" => "A diverse democratic country with a rapidly growing economy and the world's second largest population."
            ),
            "Russia" => array(
                    "capital" => "Moscow",
                    "description" => "A vast transcontinental country with a rich history and a significant presence in global politics."
            ),
            "Japan" => array(
                    "capital" => "Tokyo",
                    "description" => "An island nation known for its technologically advanced industries and unique culture."
            ),
            "Brazil" => array(
                    "capital" => "Brasília",
                    "description" => "The largest country in South America, known for its diverse geography and abundant natural resources."
            ),
            "Indonesia" => array(
                    "capital" => "Jakarta",
                    "description" => "An archipelago nation with a diverse population and abundant natural resources, including oil and natural gas."
            ),
            "Pakistan" => array(
                    "capital" => "Islamabad",
                    "description" => "A predominantly Muslim country with a rapidly growing economy and strategic geopolitical location."
            ),
            "Bangladesh" => array(
                    "capital" => "Dhaka",
                    "description" => "A country with a large population and rapidly growing economy, located in South Asia."
            ),
            "Nigeria" => array(
                    "capital" => "Abuja",
                    "description" => "A country with a rapidly growing economy, rich cultural heritage, and large population, located in West Africa."
            )
    );
    $return_value = array(
            "country" => "",
            "capital" => "",
            "description" => ""
    );
    if (isset($_POST['submit'])) {
        if (isset($_POST['country'])) {
            $country = ucwords(trim($_POST['country']));
            $found = false;
            foreach ($countries as $key => $value) {
                if ($country == $key) {
                    $return_value['country'] = $country;
                    $return_value['capital'] = $value['capital'];
                    $return_value['description'] = $value['description'];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $return_value['country'] = "$country is not on the list.";
                $return_value['capital'] = "";
                $return_value['description'] = "";
            }
        }
    }
    return $return_value;
}

$message = main();
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
                    name="country-form">
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
                    <?php echo $message['country'] . "<br>" ?>
                    <?php if ($message['capital'] != null) {
                        echo "Capital: " . $message['capital'] . "<br>";
                    } else {
                        echo "<br>";
                    } ?>
                    <?php echo $message['description'] . "<br>" ?>
                </div>
            </form>
        </div>
    </body>
</html>