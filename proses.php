<form action=" " method="POST" enctype="multipart/form-data">
	<center>
	<table>
	<tr>
		<td>
			Hobi
		</td>
		<td>
			<input type="checkbox" name="hob[]" value="Coding"> Coding
			<input type="checkbox" name="hob[]" value="Kayang"> Kayang
		</td>
		<td>
			<input type="checkbox" name="hob[]" value="Terbang"> Terbang
			<input type="checkbox" name="hob[]" value="Belajar"> Belajar 
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	 <tr>
	 	<td>
	 		Genre Film 
	 	</td>
	 	<td>
	 		<input type="checkbox" name="gen[]" value="Horror"> Horror
	 		<input type="checkbox" name="gen[]" value="Action"> Action
	 		<input type="checkbox" name="gen[]" value="Anime"> Anime
	 		
	 	</td>
	 	<td>
	 		<input type="checkbox" name="gen[]" value="Thriller"> Thriller
	 		<input type="checkbox" name="gen[]" value="Animasi"> Animasi
	 	</td>
	 </tr>
	 <tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	 <tr>
	 	<td>
	 		Tempat wisata tujuan travelling 
	 	</td>
	 	<td>
	 		<input type="checkbox" name="wisata[]" value="Bali"> Bali	
	 	</td>
	 	<td>
	 		<input type="checkbox" name="wisata[]" value="Raja Ampat"> Raja Ampat
	 	</td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td>
	 		<input type="checkbox" name="wisata[]" value="Pulau Derawan"> Pulau Derawan
	 	</td>
	 	<td>
	 		<input type="checkbox" name="wisata[]" value="Bangka Belitung"> Bangka Belitung
	 	</td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td>
	 		<input type="checkbox" name="wisata[]" value="Labuan Bajo"> Labuan Bajo
	 	</td>
	 	<td></td>
	 </tr>
	 <tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			Upload foto liburan
		</td>
		<td>
			<input type="file" name="foto"> 
		</td>
	</tr>
	 <tr>
	 	<td></td>
	 	<td><input type="submit" name="submit"></td>
	 	<td></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td><a href="formawal.php">Kembali</a> </td>
	 	<td></td>
	 </tr>
	</table>
</center>
	
</form>
<?php
	if (isset($_POST['submit'])) {
		$hob = $_POST['hob'];
		$gen = $_POST['gen'];
		$wisata = $_POST['wisata'];

		echo "Hobi :";
		foreach ($hob as $hob ) {
			echo $hob. ", ";
		}
		echo "<br>";
		echo "Genre Film :";

		foreach ($gen as $gen ) {
			echo $gen. ", ";
		}
		echo "<br>";
		echo "Tempat wisata tujuan travelling :";
		
		foreach ($wisata as $wisata ) {
			echo $wisata. ", ";
		}
		$upload = 'photo/';
		$uploadFile= $upload . basename($_FILES['foto']['name']);
		$namePhoto = $_FILES['foto']['name'];

		if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile)) {
			echo "<img src='photo/$namePhoto'>";
		}
	}
?>
