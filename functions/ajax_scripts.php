<script type="text/javascript">

function likeMovieFunction(item_id){

alert('way to go Atish');
var request;
	try{
	alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	alert(item_id);
	var item_domain="movie";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	alert('after disable');
	
}

function likeAppFunction(item_id){

alert('way to go Atish');
var request;
	try{
	alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	alert(item_id);
	var item_domain="apps";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	alert('after disable');
	
}

</script>

