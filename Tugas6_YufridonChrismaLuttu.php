<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 | Yufridon Chrisma Luttu</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <div class="container-kal">
            <?php
                    function Error()
                    {
                        echo "<i class='error' id='error'>Silahkan masukan inputan dengan benar!</i>";
                    }
                 ?>
            <h1 class="judul-header">KALKULATOR</h1>
            <div class="form-input">
                <form action="" method="POST">
                    <?php
                    global $nilai1, $nilai2, $tampungOpr, $hasil, $opr, $tampil;
                    $opr = ['+', '-', '/', '*'];
                    if (isset($_POST['submit'])) {
                        $nilai1 = @$_POST['angka1'];
                        $nilai2 = @$_POST['angka2'];
                        $tampungOpr = @$_POST['operator'];
                        $hasil = @$_POST['hasil'];

                        if ($nilai1 != '' && $nilai2 != '') {
                            function Penjumlahan($nilai1, $nilai2)
                            {
                                if (is_numeric($nilai1) == true && is_numeric($nilai2) == true) {
                                    $hasil = $nilai1 + $nilai2;
                                    $tampil = "$nilai1 + $nilai2 = $hasil";

                                    return $tampil;
                                } else {
                                    return Error();
                                }
                            }

                            function Pengurangan($nilai1, $nilai2)
                            {
                                if (is_numeric($nilai1) == true && is_numeric($nilai2) == true) {
                                    $hasil = $nilai1 - $nilai2;
                                    $tampil = "$nilai1 - $nilai2 = $hasil";

                                    return $tampil;
                                } else {
                                    return Error();
                                }
                            }

                            function Pembagian($nilai1, $nilai2)
                            {
                                if (is_numeric($nilai1) == true && is_numeric($nilai2) == true) {
                                    $hasil = $nilai1 / $nilai2;
                                    $tampil = "$nilai1 / $nilai2 = $hasil";

                                    return $tampil;
                                } else {
                                    return Error();
                                }
                            }

                            function Perkalian($nilai1, $nilai2)
                            {
                                if (is_numeric($nilai1) == true && is_numeric($nilai2) == true) {
                                    $hasil = $nilai1 * $nilai2;
                                    $tampil = "$nilai1 X $nilai2 = $hasil";

                                    return $tampil;
                                } else {
                                    return Error();
                                }
                            }

                            switch ($tampungOpr) {
                                    case '*':
                                        $hasil = Perkalian($nilai1, $nilai2);
                                        break;
                                    case '-':
                                        $hasil = Pengurangan($nilai1, $nilai2);
                                        break;
                                    case '/':
                                        $hasil = Pembagian($nilai1, $nilai2);
                                        break;

                                    default:
                                    $hasil = Penjumlahan($nilai1, $nilai2);
                                        break;
                                 }
                        }
                        echo "<input class='input' id='input1' type='text' name='angka1'  placeholder='Nilai 1'><br>";
                        echo "<input class='input' id='input2' type='text' name='angka2' placeholder='Nilai 2'><br>";
                        echo "<select name='operator' value='$tampungOpr' id='input-opr'>";

                        foreach ($opr as $key => $tmpOpr) {
                            echo "<option value='$tmpOpr'>$tmpOpr</option>";
                        }
                        echo '<select/>';
                        echo "<input class='btn' type='submit' name='submit' value='Hitung'>";
                        echo "<input class='btn-clear' onclick='Reload()' id='btn-clear' type='button' name='clear' value='Clear'><br>";
                        echo "<input class='input' type='text' value='$hasil' id='hasil' name='hasil' placeholder='Hasil'><br>";
                    } else {
                        echo "<input class='input' id='input1' type='text' name='angka1' placeholder='Nilai 1'><br>";
                        echo "<input class='input' id='input2' type='text' name='angka2' placeholder='Nilai 2'><br>";
                        echo "<select name='operator' id='input-opr'>";
                        foreach ($opr as $key => $tmpOpr) {
                            echo "<option value='$tmpOpr'>$tmpOpr</option>";
                        }
                        // echo "<option value='+'>+</option>";
                        // echo "<option value='-'>-</option>";
                        // echo "<option value='/'>/</option>";
                        // echo "<option value='*'>*</option>";
                        echo '<select/>';
                        echo "<input class='btn' type='submit' name='submit' value='Hitung'>";
                        echo "<input class='btn-clear' onclick='Reload()' id='btn-clear' type='button' name='clear' value='Clear'><br>";
                        echo "<input class='input' type='text' id='hasil' name='hasil' placeholder='Hasil'><br>";
                    }

                    ?>
                </form>
            </div>
            <small>BPPTIK - 2021</small>
            <p>@yufridonLuttu</p>
        </div>
    </div>
    <script type="text/Javascript">
        function Reload() {
        window.location.href = '';
    }
    </script>
</body>

</html>