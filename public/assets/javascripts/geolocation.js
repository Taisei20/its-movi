function get_location() {
  if (navigator.geolocation) {
    // Geolocation APIを利用できる環境向けに処理を記述
    navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
  } else {
    // Geolocation APIを利用できない環境向けに処理を記述
    // its-moviでは位置情報を取得できないため手入力で対応する！？
    alert("この端末では位置情報が取得できません(住所を手入力してください)");
  }
}

function successCallback(position) {
  document.getElementById("lat").value = position.coords.latitude;
  document.getElementById("lng").value = position.coords.longitude;
  var lng = position.coords.longitude;
  var lat = position.coords.latitude;
}

function errorCallback(error) {
  var err_msg = "";
  switch(error.code)
  {
    case 1:
      err_msg = "位置情報の利用が許可されていません";
      break;
    case 2:
      err_msg = "デバイスの位置が判定できません";
      break;
    case 3:
      err_msg = "タイムアウトしました";
      break;
  }
  alert(err_msg);
}


