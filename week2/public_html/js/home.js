
var zoom = false;

function animatee(id){
		console.log(id);
		$("#"+id).click(function(){
			
				$("#"+id).animate({
					width: '70%',
					
				},togglebool());
		});
	}

function togglebool()
{
	if(zoom == false) zoom = true;
	else zoom = false;
}


 function deleletconfig(){

    var del=confirm("Apakah anda yakin untuk menghapusnya?");
    if (del==true){
       alert ("Data terhapus")
    }else{
        alert("Data tidak jadi dihapus")
    }
    return del;
 }

$(document).ready(function(){
	$("#menugaris").click(function(){
	    //toggle : utk show hide scr bergantian
	    $("#navigasi").toggle('slow');
	    $("#navigasi").css({"float":right});
  	});



	$(".zoomable").mouseleave(function(){
		$(".zoomable").animate({
			width: '40%'
		},togglebool())
	});

});



 // MENU DROP DOWN RESPONSIVE 

