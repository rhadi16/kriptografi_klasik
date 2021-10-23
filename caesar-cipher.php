<?php

function geser_teks($string, $key) {
    return implode('', array_map(function ($char) use ($key) {
        return geser_karakter($char, $key);
    }, str_split($string)));
}

function geser_karakter($char, $shift) {
    $shift = $shift % 25;
    $ascii = ord($char);
    $shifted = $ascii + $shift;

    if ($ascii >= 65 && $ascii <= 90) {
        return chr(geser_huruf_besar($shifted));
    }

    if ($ascii >= 97 && $ascii <= 122) {
        return chr(geser_huruf_kecil($shifted));
    }

    if ($ascii >= 33 && $ascii <= 58) {
        return chr(geser_angka($shifted));
    }

    return chr($ascii);
}

function geser_angka($ascii) {
  if ($ascii < 33) {
      $ascii = 59 - (33 - $ascii);
  }

  if ($ascii > 58) {
      $ascii = ($ascii - 58) + 32;
  }
  return $ascii;
}

function geser_huruf_besar($ascii) {
    if ($ascii < 65) {
        $ascii = 91 - (65 - $ascii);
    }

    if ($ascii > 90) {
        $ascii = ($ascii - 90) + 64;
    }

    return $ascii;
}

function geser_huruf_kecil($ascii) {
    if ($ascii < 97) {
        $ascii = 123 - (97 - $ascii);
    }

    if ($ascii > 122) {
        $ascii = ($ascii - 122) + 96;
    }

    return $ascii;
}

function enkripsi($plaintext, $key = 12) {
    return geser_teks($plaintext, $key);
}

function dekripsi($ciphertext, $key = -12) {
    return geser_teks($ciphertext, -$key);
}

// Usage
if (isset($_POST['plaintext'])) {

  $plainText = $_POST['plaintext'];
  $cipherText = enkripsi($plainText, 8);
  $dekripsi = "";

} elseif(isset($_POST['cipher'])) {

  $cipher = $_POST['cipher'];
  $dekripsi = dekripsi($cipher, 8);
  $cipherText = "";

} else {
  $plainText = "";
  $cipher = "";
  $cipherText = "";
  $dekripsi = "";
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Caesar Cipher</title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }
    body {
      display: flex;
      justify-content: center;
    }
    .card {
      margin: 100px 30px;
      background-color: #0d47a1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }
    .card h5 {
      text-align: center;
      font-size: 1.2rem;
      margin-bottom: 10px;
      color: #fff;
    }
    form {
      margin-bottom: 10px;
    }
    button {
      margin-top: 10px;
      padding: 5px 10px;
      border-radius: 3px;
    }
  </style>
</head>
<body>

  <div class="card">
    <h5>Encryp Text</h5>
    <form method="post" action="">
      <input type="text" name="plaintext" value="<?php if(isset($_POST['plaintext'])) { echo $plainText; } ?>"><br>
      <button type="submit">Encryp</button>      
    </form>
    <input type="text" readonly name="hasil-enkrip" value="<?php echo $cipherText; ?>">
  </div>

  <div class="card">
    <h5>Decryp Text</h5>
    <form method="post" action="">
      <input type="text" name="cipher" value="<?php if(isset($_POST['cipher'])) { echo $cipher; } ?>"><br>
      <button type="submit">Decryp</button>
    </form>
    <input type="text" readonly name="hasil-dekrip" value="<?php echo $dekripsi; ?>">
  </div>

</body>
</html>