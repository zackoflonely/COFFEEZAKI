const profile = document.getElementById("finish");
const data ="Profile";
const data_profile = JSON.parse(localStorage.getItem(data)) || {};
// profile.addEventListener("submit",function(e){
    // }
profile.onclick=form;
function form(e){
    e.preventDefault();
    const nama = document.getElementById("nama");
    const ttl = document.getElementById("ttl");
    const status = document.getElementById("status");
    const sex = document.querySelector('input[name="sex"]:checked').value;
    const posisi = document.getElementById("posisi").value;
    const pendidikan = document.getElementById("pendidikan").value;
    const alasan = document.getElementById("alasan");
    console.log(posisi);
    console.log(sex);
    console.log(pendidikan);
    console.log(nama.value);
    const val ={
        nama:nama.value,
        ttl:ttl.value,
        status:status.value,
        sex:sex,
        posisi:posisi,
        pendidikan:pendidikan,
        alasan:alasan.value,
    }
    console.log(val);
    localStorage.setItem('Profile', JSON.stringify(val));
    alert("Berhasil")
    window.location.href="profile.html";
}

