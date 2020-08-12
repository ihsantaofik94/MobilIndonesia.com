<html>
    <head>
        <title>
            Penyewaan - MobilIndonesia.com
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
      <?php
			include("menu.php");
        ?>
        <div class="page-header">
            <h2><center>PENYEWAAN</center></h2>
        </div>

        <div>
            <table class="center">
                <tr>
                    <td>
                        <table>
                             <tr>
                                <td colspan="2">
                                <h2>Input Pembayaran</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Penyewa</td>
                                <td><input class = "warna"type="text" id="input_nim" size="25" onFocus="sorot(this)" onBlur="hilang(this)"/></td>
                            </tr>
                            <tr>
                                <td>Pilihan Mobil</td>
                                <td>
                                    <select id="input_mobil" onFocus="sorot(this)" onBlur="hilang(this)">
                                        <option value="Toyota Avanza">Toyota Avanza</option>
                                        <option value="Daihatsu Terios">Daihatsu Terios</option>
                                        <option value="Honda jazz">Honda jazz</option>
                                        <option value="Suzuki APV">Suzuki APV</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Sewa</td>
                                <td><input type="text" id="tanggal_sewa" size="25" onFocus="sorot(this)" onBlur="hilang(this)" /></td>
                            </tr>
                            <tr>
                                <td>Lama Sewa</td>
                                <td><input type="text" id="lama_sewa" size="25" onFocus="sorot(this)" onBlur="hilang(this)" /></td>
                            </tr>
                            <tr>
                                <td>Sewa Supir</td>
                                <td>
                                    <input type="checkbox" id="input_member" value="true" /> Ya
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button id="button_tampilkan" onClick="tampil();">Tampil</button>
                                    <button id="button_hapus" onClick="hapus();">Hapus</button>
                                </td>
                            </tr>
                        </table>



                        <table class="table-output">
                            <tr>
                                <td colspan="2">
                                <h2>Output Pembayaran</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobil Yang Disewa</td>
                                <td><input type="text" id="output_sewa" /></td>
                            </tr>
                            <tr>
                                <td>Tanggal Sewa</td>
                                <td><input type="text" id="output_tanggal_sewa"/></td>
                            </tr>
                            <tr>
                                <td>Harga Sewa</td>
                                <td><input type="text" id="output_harga_sewa" /></td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td><input type="text" id="output_subtotal" /></td>
                            </tr>
                            <tr>
                                <td>Total Biaya supir</td>
                                <td><input type="text" id="output_biaya_supir" /></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td><input type="text" id="output_diskon" /></td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td><input type="text" id="output_total_pembayaran" /></td>
                            </tr>
                        </table>
                    </td>
                </tr>     
            </table>
        </div>
        <div class="table-output buttom">
                <p class="text-center">Terima kasih sudah berkunjung, semoga anda bisa menikmati pelayanan dari kami.</p>
        </div>


        <script>
                var tanggal = new Date ();
                var hari = new Array ("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
                var bulan = new Array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
            
                var hari_ini = hari [tanggal.getDay()];
                var tgl = tanggal.getDate();
                var bln = bulan[tanggal.getMonth()];
                var thn = tanggal.getFullYear();

                document.getElementById('tanggal_sewa').value = ( tgl +" "+ bln +" "+ thn);

            function tampil() {
                document.getElementById('output_sewa').value = document.getElementById('output_sewa').value;
                if (document.getElementById('output_sewa').value == 'Toyota Avanza') {
                    var harga = 450000;
                    document.getElementById('output_harga_sewa').value = harga;
                } else if (document.getElementById('output_sewa').value == 'Daihatsu Terios') {
                    var harga = 300000;
                    document.getElementById('output_harga_sewa').value = harga;
                } else if (document.getElementById('output_sewa').value == 'Honda Jazz') {
                    var harga = 600000;
                    document.getElementById('output_harga_sewa').value = harga;
                } else if (document.getElementById('output_sewa').value == 'Suzuki APV') {
                    var harga = 500000;
                    document.getElementById('output_harga_sewa').value = harga;
                } else {
                    var harga = 65000;
                    document.getElementById('output_harga_sewa').value = harga;
                }

                document.getElementById('output_sewa').value = document.getElementById('input_mobil').value;

                if ( document.getElementById('lama_sewa').value >= 5 && document.getElementById('lama_sewa').value < 10) {
                    var diskon = (document.getElementById('lama_sewa').value * harga) * 0.10;
                    var sub_total = (document.getElementById('lama_sewa').value * harga) - diskon ;
                }
                else if ( document.getElementById('lama_sewa').value >= 10) {
                    var diskon = (document.getElementById('lama_sewa').value * harga) * 0.25;
                    var sub_total = (document.getElementById('lama_sewa').value * harga) - diskon ;
                } else {
                    var diskon = '';
                    var sub_total = '';
                }

                document.getElementById('output_subtotal').value = sub_total;

                if (document.getElementById('input_member').checked == true) {
                var bayar_supir = 75000 *  document.getElementById('lama_sewa').value;
                } else {
                    var bayar_supir ='';
                }
                document.getElementById('output_biaya_supir').value = bayar_supir;
                document.getElementById('output_diskon').value = diskon;
                document.getElementById('output_total_pembayaran').value = sub_total + bayar_supir;
                 document.getElementById('output_tanggal_sewa').value = document.getElementById('tanggal_sewa').value;
            }

            
        </script>
        </center>
        </div>
        <?php
			include("footer.php");
		?>        
    </body>
</html>