const data1 = localStorage.getItem('pesanan');
const data2 =JSON.parse(data1) || [];
const data3 = localStorage.getItem('riwayat_pesanan');
const nama_pesanan = document.getElementById("nama");
const harga_pesanan = document.getElementById("harga");
const jumlah_pesanan = document.getElementById("jumlah");
const total_harga = document.getElementById("total_harga");
const bayar = document.getElementById("bayar");
let namaString = "";
let hargaString = "";
let jumlahString = "";
const total = data2.reduce((total, item) => {
    const harga = parseInt(item.harga.replace(/[^0-9]/g, ""));
    const jumlah = parseInt(item.jumlah);
    const hitungan = jumlah * harga;
    return total + hitungan;
  }, 0);  
for (let a = 0; a < data2.length; a++) { 
      console.log(total)
    namaString +=data2[a].nama + "<br>";
    hargaString +=data2[a].harga + "<br>";
    jumlahString +=data2[a].jumlah + "<br>";
}
namaString = namaString.slice(0, -2); // Menghapus koma dan spasi terakhir
hargaString = hargaString.slice(0, -2); 
jumlahString = jumlahString.slice(0, -2); 
// totalString = jumlahString.slice(0, -2); 
nama_pesanan.innerHTML = namaString;
harga_pesanan.innerHTML = hargaString;
jumlah_pesanan.innerHTML = jumlahString;
total_harga.innerHTML = "Rp."+total;
const nominal = document.getElementById("nominal");
const hitung = nominal - total;
bayar.onclick=trans;
function trans(e){
    e.preventDefault();
    const data4 =JSON.parse(data3) || [];
    let total = data2.reduce((total, item) => total + parseInt(item.harga.replace(/[^0-9]/g, "")), 0);
    const nominal = document.getElementById("nominal");
    const hitung = nominal.value - total;
    if(hitung<0){
        alert("Pembayaran Gagal")
    }else{
        console.log(nominal.value)
        console.log(total)
        console.log(hitung);
        alert("Pembayaran Sukses")
        data4.push(data2)
        localStorage.setItem('riwayat_pesanan', JSON.stringify(data4));
        localStorage.removeItem('pesanan');
        window.location.href="home.php";
    }
}