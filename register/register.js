function validateForm()
{
	var x=document.getElementsByClassName("check");
	var i;
	var b=false;
	for(i=0;i<x.length;i++)
	{
		if(x[i].checked==true)
		{
			b=true;
			break;
		}
	}
	if(b==false)
	{
		alert("Select atleast 1 event");
		return false;
	}
	x=document.getElementsByName("strength");
	var a=document.getElementsByClassName("member1");
	var b=document.getElementsByClassName("member2");
	var c=document.getElementsByClassName("member3");
	var d=document.getElementsByClassName("member4");
	if(x=="1")
	{
		for(i=0;i<a.length;i++)
		{
			if(a[i]==null||a[i]=="")
			{
				alert("Enter details of member 1");
				return false;
			}
		}
		for(i=0;i<b.length;i++)
		{
			if(b[i]!=null&&b[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
		for(i=0;i<c.length;i++)
		{
			if(c[i]!=null&&c[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
		for(i=0;i<d.length;i++)
		{
			if(d[i]!=null&&d[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
	}
	else if (x=="2")
	{
		for(i=0;i<a.length;i++)
		{
			if(a[i]==null&&a[i]=="")
			{
				alert("Enter details of member 1");
				return false;
			}
		}
		for(i=0;i<b.length;i++)
		{
			if(b[i]==null||b[i]=="")
			{
				alert("Enter details of member 2");
				return false;
			}
		}
		for(i=0;i<c.length;i++)
		{
			if(c[i]!=null&&c[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
		for(i=0;i<d.length;i++)
		{
			if(d[i]!=null&&d[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
	}
	else if(x=="3")
	{
		for(i=0;i<a.length;i++)
		{
			if(a[i]==null||a[i]=="")
			{
				alert("Enter details of member 1");
				return false;
			}
		}
		for(i=0;i<b.length;i++)
		{
			if(b[i]==null||b[i]=="")
			{
				alert("Enter details of member 2");
				return false;
			}
		}
		for(i=0;i<c.length;i++)
		{
			if(c[i]==null||c[i]=="")
			{
				alert("Enter details of member 3");
				return false;
			}
		}
		for(i=0;i<d.length;i++)
		{
			if(d[i]!=null||d[i]!="")
			{
				alert("Enter details as per team strength");
				return false;
			}
		}
	}
	else if(x=="4")
	{
		for(i=0;i<a.length;i++)
		{
			if(a[i]==null||a[i]=="")
			{
				alert("Enter details of member 1");
				return false;
			}
		}
		for(i=0;i<b.length;i++)
		{
			if(b[i]==null||b[i]=="")
			{
				alert("Enter details of member 2");
				return false;
			}
		}
		for(i=0;i<c.length;i++)
		{
			if(c[i]==null||c[i]=="")
			{
				alert("Enter details of member 3");
				return false;
			}
		}
		for(i=0;i<d.length;i++)
		{
			if(d[i]==null||d[i]=="")
			{
				alert("Enter details of member 4");
				return false;
			}
		}
	}
	return true;
}
