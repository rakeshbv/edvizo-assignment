function filter(){
	var colour=[];
	var size=[];
	var colours=$('.colour');
	var sizes=$('.size');
	var filterapplied = document.getElementById('filters');
	filterapplied.innerHTML="";
	for (var i=0;i<colours.length;i++)
	{
	   if(colours[i].checked==true)
	    {
		colour[i]=colours[i].value;
		filterapplied.innerHTML+=colour[i]+",";
	    }
	}
	for (var i=0;i<sizes.length;i++)
	{
	   if(sizes[i].checked==true)
	    {
		size[i]=sizes[i].value;
		filterapplied.innerHTML+=size[i]+",";
	    }
	}
	datasend(colour,size);
}
    

function datasend(colour,size)
 {
	var jsondata=
	{
		'colour':colour,
		'size':size,
	}
	console.log(JSON.stringify(jsondata));
	$.ajax
	({
		type: 'POST',
		url:'http://localhost/webapplication/index.php/home/filter/',
		data:jsondata,
		success: function(data)
		 {
			$(".items").html(data);
		 }
	});
 }
