<?php
/*****************************************************
       "All Post Contact Form"'s Sub File
              - If Cookie Enabled -
              Don't Edit This File
          Created by RainbowLink Inc.
*****************************************************/
echo '<script type="text/javascript">
function setAPCFCookie(name,value,days) {
 var expires = "";
 if (days) {
  var date = new Date();
  date.setTime(date.getTime() + (days*24*60*60*1000));
  expires = "; expires=" + date.toUTCString();
 }
 document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function eraseAPCFCookie(name) {   
 document.cookie = name+"=; Max-Age=-99999999;";  
}
</script>'; 

