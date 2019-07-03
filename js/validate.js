function validateForm() 
{
	var nm=document.getElementById("uname")
	var pd= document.getElementById("pwd")
	if(nm.value=="")
	{
		alert("Please enter Username")
		return false;
	}
	else if(pd.value=="")
	{
		alert("Please enter Password")
		return false;
	}
	return true;
}