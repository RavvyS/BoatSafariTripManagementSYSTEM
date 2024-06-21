function loadData(name) {
  if (name=="btn1"){
    document.getElementById("image1").src ="images/pic1.jpg";
  }
  else if (name=="btn2") {

    document.getElementById("image1").src ="images/pic2.jpg";
  }
  else if(name=="btn3"){
    document.getElementById("image1").src="images/pic3.jpg";
  }
  else{
      alert("Invalid!!!");
    }
  
  }

  var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }
