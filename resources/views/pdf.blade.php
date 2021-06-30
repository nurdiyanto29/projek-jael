<!DOCTYPE html>
<html>
<head>
	<title>Laporan Keuangan</title>
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T')}}" crossorigin="anonymous">

</head>
<body >
<table align="center">>
 <thead>
	<td>
		
		<center>
			<font size="6"><b> LAPORAN KEUANGAN</font> <b><br>
			<font size="4">MASJID UMMI SALAMAH WARUNGBOTO</font><br>
			<font size="2"><i> Alamat: Jl. Perwira, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164</font> <i><br>
				</center>
	</td>
 </thead>
</table>
<hr>
<table align="left">>
<thead>
	<td>
		
		<left>
			<font size="2">Nomor : </font><br>
			<font size="2">Hal   : Penyampaian laporan keuangan masjid dari {{date('d F Y', strtotime($dari))}} sampai {{date('d F Y', strtotime($sampai))}} </font> <i><br>
			</left>
	</td>
</thead>
</table>
<br>
<br>
<h3>Data Keuangan</h3>
	<table  class='table table-striped'  >
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Kegiatan</th>
				<th>Sumber</th>
				<th>Uang Masuk</th>
				<th>Uang Keluar</th>
				<th>Kategori</th>
			</tr>
		</thead>
		<body>
		
			@php $i=1 @endphp
			@foreach($keuangan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->tgl}}</td>
				<td>{{$p->namaKegiatan}}</td>
				<td>{{$p->sumber}}</td>
				<td>align=right{{"Rp.".number_format($p->masuk,2,',','.')}}</td>
				<td>align=right{{"Rp.".number_format($p->keluar,2,',','.')}}</td>
				<td>{{$p->kategori}}</td>
			</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Sub Total </td>
				<td> align=right{{"Rp.".number_format($submasuk,2,',','.')}}</td>
				<td>align=right{{"Rp.".number_format($subkeluar,2,',','.')}}</td>
			</tr> 
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Total Saldo </td>
				<td>{{"Rp.".number_format($masuk-$keluar,2,',','.')}}</td>
				<td></td>
			</tr> 
		</tbody>
	</table>
			<footer>
			<table align="center">>
				<tbody>
				<thead>
				<td>
					
					<center>
						<font size="4"><b>Pengurus Masjid<b></font><br>
						</center>
				</td>
				</thead>
			</tbody>
			</table>

			<br><br><br><br><br><br><br>
			<table align="left">>
				<tbody>
				<thead>
				<td>
					<center>
						<font size="3"><b><u>H.Markiman Iman Santoso<b><u></font><br>
						<font size="2"><b>Ketua Takmir<b></font><br>
						</center>
				</td>
				</thead>
			</tbody>
			</table>
			<table align="right">>
				<tbody>
				<thead>
				<td>
					<center>
						<font size="3"><b><u>H.Nasri Parman<b><u></font><br>
							<font size="2"><b>Bendahara<b></font><br>
						</center>
				</td>
				</thead>
			</tbody>
			</table>
			</footer>
</html>