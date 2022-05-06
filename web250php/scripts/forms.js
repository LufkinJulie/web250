function getform2() 
{
	var name = "Name: " + document.getElementById("name").value;
	var email = "Eamil: " + document.getElementById("email").value;
	var favorite_color = "Favorite Color: "  + document.getElementById("favorite_color").value;
	var solid_patterned = "Solid or Patterened Linens: " + document.getElementById("solid_patterned").value;
	var fabric_type = "Fabric Type: " + document.getElementById("fabric_type").value;
	var tread_count = "Tread Count: " + document.getElementById("tread_count").value;


	// create array to forward information.
	const newInfo = [name, email, favorite_color, solid_patterned, fabric_type, tread_count];
	// place array information in new function name
	getBackground(newInfo)
}
function getBackground(newInfo)
{
    // removing the list data after clicking submit so it only apprears once
    var words = document.querySelectorAll('li');
    words.forEach((li) => li.remove());

	for (let i = 0; i < newInfo.length; i++)
	{
		// creating the list element
		var newList = document.createElement("li");
		
		// text output
		var newTextOutput = document.createTextNode(newInfo[i]);
			
		// append info
		newList.appendChild(newTextOutput);
			
		// where to place on page
		var place = document.getElementsByTagName("ul")[0];
		place.appendChild(newList);
	}
}

