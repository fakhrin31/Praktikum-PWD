<html>

 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>

 <body>
 <?php
 // define variables and set to empty values
 $namaErr = $emailErr = $genderErr = $websiteErr = "";
 $nama = $email = $jk = $comment = $website = "";
 $error = false;

 if (isset($_POST['submit'])) {
 if (empty($_POST["nama"])) {
 $namaErr = "Nama harus diisi";
 $error = true;
 }

 if (empty($_POST["email"])) {
 $emailErr = "Email harus diisi";
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Email tidak sesuai format";
 $error = true;
 }
}

 if (empty($_POST["website"])) {
 $website = "";
 }

 if (empty($_POST["comment"])) {
 $comment = "";
 }
 if (empty($_POST["gender"])) {
 $genderErr = "Gender harus dipilih";
 $error = true;
 }
if($error==true){
}else{
    $nama = $_POST['nama']; 
    $email = $_POST['email']; 
    $website = $_POST['website']; 
    $komen = $_POST['comment']; 
    $jk = $_POST['gender'];
    include_once("conn.php"); 
            $result = mysqli_query($con, "INSERT INTO komentar(nama,email,website,komen,jk)
            VALUES('$nama', '$email','$website','$komen','$jk')");
 }
}

 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 ?>
 <h2>Posting Komentar </h2>

<p><span class = "error">* Harus Diisi.</span></p>

<form method = "post" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td>Nama:</td>
<td><input type = "text" name = "nama">
<span class = "error">* <?php echo $namaErr;?></span>
</td>
</tr>

<tr>
<td>E-mail: </td>
<td><input type = "text" name = "email">
<span class = "error">* <?php echo $emailErr;?></span>
</td>
</tr>

<tr>
<td>Website:</td>
<td> <input type = "text" name = "website">
<span class = "error"><?php echo $websiteErr;?></span>
</td>
</tr>

<tr>
<td>Komentar:</td>
<td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
</tr>

<tr>
<td>Gender:</td>
<td>
<input type = "radio" name = "gender" value = "L">Laki-Laki
<input type = "radio" name = "gender" value = "P">Perempuan
<span class = "error">* <?php echo $genderErr;?></span>
</td>
</tr>
<td>
<input type = "submit" name = "submit" value = "Submit">
</td>
</table>
</form>

<?php
include_once("conn.php");
$result = mysqli_query($con,"SELECT * FROM komentar");
echo "<h2>Data yang anda isi:</h2>"; ?>
<table width='80%' border=1>
        <tr>
            <th>No.</th> 
            <th>Nama</th> 
            <th>Email</th> 
            <th>Website</th> 
            <th>Komentar</th>
            <th>Kelamin</th>
        </tr>
<?php
$no=1;
while($tampil = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$tampil['nama']."</td>";
    echo "<td>".$tampil['email']."</td>";
    echo "<td>".$tampil['website']."</td>";
    echo "<td>".$tampil['komen']."</td>";
    echo "<td>".$tampil['jk']."</td>";
    echo "</td></tr>";
}
 ?>
</table>

 </body>
</html>
