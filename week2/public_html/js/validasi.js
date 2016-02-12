function validasi(){
	var username 	=document.forms["daftar"]["username"].value
	var password  	=document.forms["daftar"]["password"].value
	var repassword 	=document.forms["daftar"]["repassword"].value
	var nomorp 	=document.forms["daftar"]["nomorp"].value
	var nigs 	=document.forms["daftar"]["nigs"].value
	var regsbg 	=document.forms["daftar"]["regsbg"].value

		
	if (username=='' && password=='' && repassword=='' && nomorp=='' && nigs=='') {
		alert("Anda belum mengisi apapun");
		return false;
	}else if (username==''){
		 alert("Nama harus diisi");
		 return false;
	}else if (password=='') {
		 alert("Kata Sandi harus diisi");
		 return false;
	}else if(repassword==''){
		 alert("ReKata Sandi harus diisi");
		 return false;
	}else if(nomorp==''){
		 alert("Nomor Ponsel harus diisi");
		 return false;
	}else if(nigs==''){
		 alert("NIG/NIS harus diisi");
		 return false;
	}else if (password != repassword) {
		 alert("Kata sandi tidak sama");
		 return false;
	}else if (regsbg!="Guru" && regsbg!="Siswa") {
		 alert("Silakan pilih salah satu jenis, guru atau siswa");
		 return false;
	}
}
