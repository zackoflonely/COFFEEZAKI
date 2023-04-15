const data_profile=JSON.parse(localStorage.getItem("Profile"));
const nama = document.getElementById("nama");
const ttl = document.getElementById("ttl");
const stat = document.getElementById("status");
const sex = document.getElementById('sex');
const posisi = document.getElementById("posisi");
const pendidikan = document.getElementById("pendidikan");
const alasan = document.getElementById("alasan");
nama.innerHTML=data_profile.nama;
ttl.innerHTML=data_profile.ttl;
stat.innerHTML=data_profile.status;
sex.innerHTML=data_profile.sex;
posisi.innerHTML=data_profile.posisi;
pendidikan.innerHTML=data_profile.pendidikan;
alasan.innerHTML=data_profile.alasan;
const clear = document.getElementById('clear');
clear.onclick=reload;
function reload(e){
    e.preventDefault();
    localStorage.removeItem('Profile');
    alert("Berhasil dihapus")
}