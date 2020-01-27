
function validationForm(){
	var x=document.forms["signup_form"]["firstname"].value;
	var y=document.forms["signup_form"]["lastname"].value;
	if(x.length>25){
		document.getElementByid('')
		return false;
	}
	if(y.length>25){
		alert("Name should be less than 25")
		return false;
	}
	var fname = x.match(/\d+/g);
	if (fname != null) {
	alert('Name should not have number');
   }
   var lname = y.match(/\d+/g);
	if (lname != null) {
	alert('Name should not have number');
   }
}

$(document).ready(function(){

	$(".ad_listing_form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  
		$.ajax
		({
			type: 'POST',
			url: 'advertise_system.php',
			data:formData,
			//dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,                
			success: function (response) 
			{
				if(response.trim()=='extension error 1')
				{
					document.getElementById("error").innerHTML="Wrong extension of the first file uploaded";
				}
				else if(response.trim()=='extension error 2')
				{
					document.getElementById("error").innerHTML="Wrong extension of the second file uploaded";
				}
				else if(response.trim()=='extension error 3')
				{
					document.getElementById("error").innerHTML="Wrong extension of the third file uploaded";
				}
				else
				{
					window.location.href="adlisting.php?ad_Id="+response.trim();
				}
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

wbtype="All";
adtype="All";
height=0;
width=0;
cost=0;


function webtype(wbtype)
{
	// alert(wbtype.value);
	wbtype=wbtype.value;
	// alert(wbtype);
	fetchdata();
}

function adtypee(adtype)
{
	// alert(adtype.value);
	adtype=adtype.value;
	fetchdata();
}

function hei(height)
{
	document.getElementById("heightspan").innerHTML=height.value;
	// alert(height.value);
	height=height.value;
	fetchdata();
}

function wid(width)
{
	document.getElementById("widthspan").innerHTML=width.value;
	// alert(width.value);
	width=width.value;
	fetchdata();
}

function cst(cost)
{
	document.getElementById("costspan").innerHTML=cost.value;
	// alert(cost.value);
	cost=cost.value;
	fetchdata();
}

function fetchdata()
{
	// alert("here");
	wbtype  =document.getElementById('wbtype').value;
	adtype  =document.getElementById('adtype').value;
	height  =document.getElementById('height').value;
	width   =document.getElementById('width').value;
	cost    =document.getElementById('cost').value;
	// alert(wbtype+adtype+height+width+cost);

	var postData = 
	{
		"wbtype":wbtype,
		"adtype":adtype,
		"height":height,
		"width" :width,
		"cost"  :cost
	}
	var dataString = JSON.stringify(postData);

	$.ajax
	({
		type: 'POST',
		url: 'categoryfetchdata.php',
		data :{filterdata:postData},
		// dataType: 'text', 
		// contentType: "application/json; charset=utf-8",
		dataType: "json",            
		success: function (response) 
		{
			// alert("ikde ala re!");
			
			// response=JSON.parse(response);alert(response[1]);
			// alert(response);

			// document.getElementById("jhat").innerHTML=JSON.parse(response);

			// $('#categories-div').toggle();

			// document.getElementById('categories-div').innerHTML="hi"; 
			if(xhr.responseText.trim()!="</div>")
			{ 
				$('#categories-div').html(response);
			}
			else
			{
				$('#categories-div').html("<p>No Results</p>");
			}
		},                
		error: function(xhr, status, error) {
			// alert("hi");
			// alert(xhr.responseText);
			if(xhr.responseText.trim()!="</div>")
			{
				$('#categories-div').html(xhr.responseText);
			}
			else
			{
				$('#categories-div').html("<p>No Results</p>");
			}
			

			// alert(error);
		}              
	});

	return false;
}