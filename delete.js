function GetRequestObject() {
  var xhr = null;

  if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
  } else if (window.ActiveObject) {
    try {
      objRequest = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e) {
      try {
        objRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e) {}
    }
  }
  return xhr;
}

function DeletePost(Event) {
  var element = Event.currentTarget;
  var pid = element.id.substr(7);

  var xhr = GetRequestObject();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var responseObj = JSON.parse(xhr.responseText);
      console.log(responseObj);
      if (responseObj[0].postHidden) {
        var element = document.getElementById("post" + pid);
        element.parentNode.removeChild(element);
      } else if (responseObj[0].postDeleted) {
        window.location.href = "/cs372/wall.php";
      }
    }
  }
  xhr.open("POST","delete.php",true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send("pid=" + pid);
}
