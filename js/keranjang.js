const button = document.getElementById("buy");
let angka = 0;
let satuan=1;
const data_pesanan = localStorage.getItem('pesanan');
const data =JSON.parse(data_pesanan) || [];
const keranjang = document.getElementById("krj");
let total = data.reduce((total, item) => total + item.jumlah, 0);
console.log(total);
function krj(){
    alert("Berhasil")
    window.location.href='profile.php';
}
function beli(i){
    // const data_pesanan = localStorage.getItem('pesanan');
    // const data =JSON.parse(data_pesanan) || [];
    const nama = document.getElementById("nama"+i);
    const harga = document.getElementById("harga"+i);
    const isi = nama.textContent;
    const hrg = harga.textContent;
    // const stok_kopi =  localStorage.getItem('stok_kopi');
    // const harga =  localStorage.getItem('harga_kopi');
    console.log(isi);
    console.log(hrg);
    let itemFound = false;
    for (let a = 0; a < data.length; a++) { 
        if(data[a].nama === isi){
            data[a].jumlah++;
            itemFound = true;
            break;
        }
    }
    if(!itemFound) {
        const pesanan ={
            nama:isi,
            jumlah:1,
            harga:hrg
        };
        data.push(pesanan);
    }
    angka++;
    localStorage.setItem('pesanan', JSON.stringify(data));
    keranjang.innerHTML = total+angka;
}
keranjang.innerHTML = total;