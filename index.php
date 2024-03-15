<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('https://images.pexels.com/photos/6238297/pexels-photo-6238297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
    }

    .main {
        height: 100vh;
    }

    .kalkulator {
        height: 450px;
        width: 550px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="kalkulator p-5 shadow-lg p-3 mb-5">
            <p class="text-center fs-5 fw-bold">Kalkulator operator</p>
            <form action="" method="post">
                <div class="bungkus d-flex justify-content-between">
                    <div >
                        <label for="bil1">Angka 1</label>
                        <input type="number" class="form-control" name="bil1" id="bil1">
                    </div>

                    <div>
                        <label for="bil2">Angka 2</label>
                        <input type="number" class="form-control" name="bil2" id="bil2">
                    </div>
                </div>
                <div class="coba mt-3"><label for="bil1 ">Pilih operator</label></div>
                
                <select class="form-select mt-1" name="operator" aria-label="Default select example">
                    <option selected>Pilih operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>

                <div>
                    <button class="btn btn-success form-control mt-3" type="submit" name="hitung">Hitung !</button>
                </div>

            </form>
            <?php
            $hasil = "";
            if (isset($_POST["hitung"])) {
                if ($_POST["bil1"] == '' || $_POST["bil2"] == '') {
                    echo "<div class='mt-3 text-center fs-5 fw-bold '>Silahkan isi kedua bilangan !</div>";
                } else {
                    $bilangan1 = $_POST['bil1'];
                    $bilangan2 = $_POST['bil2'];
                    $operator = $_POST['operator'];

                    switch ($operator) {
                        case '+':
                            $hasil = $bilangan1 + $bilangan2;
                            break;
                        case '-':
                            $hasil = $bilangan1 - $bilangan2;
                            break;
                        case '/':
                            if ($bilangan2 != 0) {
                                $hasil = $bilangan1 / $bilangan2;
                            } else {
                                echo "<div class='mt-3 text-center fs-5 fw-bold'>Tidak bisa membagi dengan angka nol !</div>";
                                break;
                            }
                            break;
                        case '*':
                            $hasil = $bilangan1 * $bilangan2;
                            break;

                        default:
                            echo "<div class='mt-3 text-center fs-5 fw-bold '>Mohon pilih operator terlebih dahulu.</div>";
                            break;
                    }

                }
                echo "<div class='mt-3 text-center fs-5 fw-bold '>Hasil: $bilangan1 $operator $bilangan2 = $hasil </div>";




            }

            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>