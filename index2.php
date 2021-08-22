<html>

<head>
  <meta charset="utf-8">
  <title>Latihan Ajax</title>
</head>

<body>
  <h2>Latihan Ajax 1</h2>

  <select id="nama" name="fakultas" onchange="fakultas()">
    <option value="">-Pilih-</option>
    <option value="KBXAK<?= date('ymd') ?>">A</option>
    <option value="KBXIAK<?= date('ymd') ?>">B</option>
    <option value="KBXIIAK<?= date('ymd') ?>">C</option>
    <option value="KBXPM<?= date('ymd') ?>">D</option>
    <option value="KBXIPM<?= date('ymd') ?>">E</option>
    <option value="KBXIPM<?= date('ymd') ?>">F</option>
  </select>

  <input type="text" name="jurusan" id="jurusan">

  <script type="text/javascript">
    const obj = [{
      KBXAK<?= date('ymd') ?> : '1',
      KBXIAK<?= date('ymd') ?>: '2',
      KBXIIAK<?= date('ymd') ?>: '3',
      KBXPM<?= date('ymd') ?>: '4',
      KBXIPM<?= date('ymd') ?>: '5',
      KBXIPM<?= date('ymd') ?>: '6',

    }]

    function fakultas() {
      var data = document.getElementById("nama").value;
      document.getElementById("jurusan").value = obj[0][data];
    }
  </script>

</body>

</html>