<?php 
function Mod($a, $b)
{
	return ($a % $b + $b) % $b;
}

function Cipher($input, $key, $encipher)
{
	$keyLen = strlen($key);

	for ($i = 0; $i < $keyLen; ++$i)
		if (!ctype_alpha($key[$i]))
			return ""; // Error

	$output = "";
	$nonAlphaCharCount = 0;
	$inputLen = strlen($input);

	for ($i = 0; $i < $inputLen; ++$i)
	{
		if (ctype_alpha($input[$i]))
		{
			$cIsUpper = ctype_upper($input[$i]);
			$offset = ord($cIsUpper ? 'A' : 'a');
			$keyIndex = ($i - $nonAlphaCharCount) % $keyLen;
			$k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
			$k = $encipher ? $k : -$k;
			$ch = chr((Mod(((ord($input[$i]) + $k) - $offset), 26)) + $offset);
			$output .= $ch;
		}
		else
		{
			$output .= $input[$i];
			++$nonAlphaCharCount;
		}
	}

	return $output;
}

function Encipher($input, $key)
{
	return Cipher($input, $key, true);
}

function Decipher($input, $key)
{
	return Cipher($input, $key, false);
}

// Usage
// $text = "Hello, World!";
// $cipherText = Encipher($text, "cipher");
// $plainText = Decipher($cipherText, "cipher");

// echo "Plain Text: ".$text;
// echo "<br/>";
// echo "Cipher Text: ".$cipherText;
// echo "<br/>";
// echo "Dekripsi: ".$plainText;
// Usage
if (isset($_POST['text'])) {

  $text = $_POST['text'];
  $cipherText = Encipher($text, "cipher");
  $dekripsi = "";

} elseif(isset($_POST['cipher'])) {

  $cipher = $_POST['cipher'];
  $dekripsi = Decipher($cipher, "cipher");
  $cipherText = "";

} else {
  $text = "";
  $cipher = "";
  $cipherText = "";
  $dekripsi = "";
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Vigenere Cipher</title>
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
      <input type="text" name="text" value="<?php if(isset($_POST['text'])) { echo $text; } ?>"><br>
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