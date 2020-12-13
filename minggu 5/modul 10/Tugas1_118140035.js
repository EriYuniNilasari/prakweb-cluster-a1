var datatext = document.getElementById('text');
var ul = document.getElementById('ul');
var barang = ["Buku Tulis" , "Pensil" , "Spidol"];
var string = "";


function tambah(){
	barang.push(datatext.value) ;
	show();
}
function show(){
	ul.innerHTML = "";
    barang.forEach(get);
}
function get(item , index){
	string = "<li>" + item + " [ <span onclick='edit("+ index + ")'>Edit</span> | <span onclick='hapus("+index+")'>Hapus</span> ]</li>"; 
	ul.innerHTML += string;
}
function edit(id){
	console.log(id);
    nilai = prompt("Ubah Barang");
    if(nilai.length > 0) {
        barang[id] = nilai;
    } else {
        alert('Tidak Boleh Kosong');
    }
	barang[id] = nilai;
	show();
	console.log(barang);
}
function hapus(id){
	barang.splice(id , 1 );
	console.log(barang);
	show();
}
