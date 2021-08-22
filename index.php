<html>

<head>
	<meta charset="utf-8">
	<title>Latihan Ajax</title>
</head>

<body>
	<h2>Latihan Ajax 1</h2>

	<select id="nama" name="fakultas" onchange="fakultas()">
		<option value="0">-Pilih-</option>
		<option value="1">A</option>
		<option value="2">B</option>
		<option value="3">C</option>
		<option value="4">D</option>
	</select>

	<input type="text" name="jurusan" id="jurusan">

	<script type="text/javascript">
		const camaros = ['Choose', 'Camaro RS', 'Camaro SS', 'Camaro SS 1LE', 'Camaro ZL1']

		function fakultas() {
			var data = document.getElementById("nama").value;
			document.getElementById("jurusan").value = camaros[data];
		}
	</script>
</body>

</html>