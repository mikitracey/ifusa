var d = new Date();
var t_hour = d.getHours();
var cssfile;

function switchtime(){
	
	if (t_hour <= 3)
   {
   alert("Hello dear visitor,\nWorking late aren't we?");
   cssfile = night.css;
   }
else if (t_hour > 3 && t_hour < 12)
   {
   alert("Good morning dear visitor");
      cssfile = morning.css;
   }
else if (t_hour >=12 && t_hour <= 16)
   {
   alert("Good afternoon dear visitor");
      cssfile = afternoon.css;
   }
else
   {
   alert("Good Evening dear visitor");
      cssfile = evening.css;
   }

}