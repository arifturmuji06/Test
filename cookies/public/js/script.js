// Ajax
let keyword = document.getElementById('keyword');
let container = document.getElementById('container');
let tombol = document.getElementById('tombol');

// buat event
keyword.addEventListener('keyup', function() {
	// ajax
	let xhr = new XMLHttpRequest();
	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}
	// eksekusi ajax
	xhr.open('get', 'cari_buku.php?keyword=' + keyword.value);
	xhr.send();
});

let keyword1 = document.getElementById('keyword1');
let container1 = document.getElementById('container1');
let tombol1 = document.getElementById('tombol1');

// buat event
keyword1.addEventListener('keyup', function() {
	// ajax
	let xhr = new XMLHttpRequest();
	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			container1.innerHTML = xhr.responseText;
		}
	}
	// eksekusi ajax
	xhr.open('get', 'cari_buku_admin.php?keyword1=' + keyword1.value);
	xhr.send();
});

// text melebihi batas
var p = $('#dash p');
var ks = $('#dash').height();
while ($(p).outerHeight() > ks) {
  $(p).text(function(index, text) {
    return text.replace(/\W*\s(\S)*$/, '...');
  });
}