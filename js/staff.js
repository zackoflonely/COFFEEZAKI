const data3 = localStorage.getItem('riwayat_pesanan');
const data2 =JSON.parse(data3) || [];
const nama_pesanan = document.getElementById("nama");
const harga_pesanan = document.getElementById("harga");
const jumlah_pesanan = document.getElementById("jumlah");
const total_harga = document.getElementById("total_harga");
const target = document.getElementById("target");
const bayar = document.getElementById("bayar");
// console.log(data2[0]);
// for (let i = 0; i < data2.length; i++) {

//     total_harga.innerHTML = "Rp."+total;
// }
for (let i = 0; i < data2.length; i++) { 
    let namaString = "";
    let hargaString = "";
    let jumlahString = "";
    const total = data2[i].reduce((total, item) => {
        const harga = parseInt(item.harga.replace(/[^0-9]/g, ""));
        const jumlah = parseInt(item.jumlah);
        const hitungan = jumlah * harga;
        return total + hitungan;
    }, 0);
    for (let a = 0; a < data2[i].length; a++) { 
        console.log(data2[i][a].nama);
        namaString +=data2[i][a].nama + "<br>";
        hargaString +=data2[i][a].harga + "<br>";
        jumlahString +=data2[i][a].jumlah + "<br>";
    }
    namaString = namaString.slice(0, -2); // Menghapus koma dan spasi terakhir
    hargaString = hargaString.slice(0, -2); 
    jumlahString = jumlahString.slice(0, -2); 
    "<tr>";
    target.innerHTML += 
    '<td>'+(i+1)+'</td><td>'+namaString+'</td><td>'+hargaString+'</td><td>'+jumlahString+'</td><td>'+total+'</td>'
    
    "</tr>";

    // console.log(data2[i]);
}

