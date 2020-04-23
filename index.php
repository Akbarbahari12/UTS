<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}

	.menu-akbar{
		background-color: #228B22;
	}

	.menu-akbar ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu-akbar > ul > li {
		float: left;
	}

	
	.menu-akbar li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.menu-akbar li a:hover{
		background-color: #2525ff;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>


<header class="header">
	<div class="menu-akbar">

		<ul>
			<li class="dropdown"><a href="#">Nama Wilayah</a>
				<ul class="isi-dropdown">
					<li><a href="#">DKI Jakarta</a></li>
					<li><a href="#">Jawa Barat</a></li>
					<li><a href="#">Banten</a></li>
					<li><a href="#">Jawa Tengah</a><li>
				</ul>
			<li><a href="index.php?page=jumlah positif">Jumlah Positif</a></li>
			<li><a href="index.php?page=jumlah dirawat">Jumlah Dirawat</a></li>
			<li><a href="index.php?page=jumlah sembuh">Jumlah Sembuh</a></li>
			<li><a href="index.php?page=jumlah meninggal">Jumlah Meninggal</a></li>
		</ul>

	</div>
</header>

<div class="content">
	<header>
		<center><h1 class="judul">Data Pemantauan Covid19 Wilayah DKI Jakarta</h1><center>
		<h3 class="Waktu">Per 18 April 2020 21:28:16 (Waktu dan jam Sekarang)</h3>
		<h3 class="Nama">Akbar Fernanda Bahari / 2016141768</h3>
	</header>
	
<body>
	<center><table border ="1"
	<!--baris pertama terdiri dari 3 kolom-->
	<tr>
	<td> Positif</td>
	<td> Dirawat</td>
	<td> Sembuh</td>
	<td> Meninggal</td>
	</tr>
	<!--baris kedua terdiri dari 3 kolom-->
	<tr>
	<td> 2902 </td>
	<td> 1769 </td>
	<td> 206 </td>
	<td> 257 </td>
	</tr>
	</table></center>
<body>
</html>
