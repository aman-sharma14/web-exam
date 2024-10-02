
function getData(){
	$.ajax({
		url: 'fetch.php',
		method: 'GET',
		success:function(html){
			$('#itemsList').html(html);
		} 
	})
}

$(document).ready(()=>{
	$(document).on('submit','#form',(e)=>{
	e.preventDefault();

	let data = $(this).serialize();

	$.ajax({
		url: 'submit.php',
		method: 'POST',
		data : data,
		success:function(msg){
			$('#msg').html(msg);
			getData();
		}
	})


})


$(document).on('click', '.update', ()=>{
	
	let data = {
			    'name': $(this).siblings('.itemQty').attr('name'),
			    'qty': $(this).siblings('.itemQty').val()  
				};

	$.ajax({
		url: 'update.php',
		method: 'POST',
		data: data,
		success: function(msg){
			$('#msg').html(msg);
			getData();
		}
	});

});







})