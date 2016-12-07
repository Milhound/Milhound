function darkmode() {
  var xhr = new XMLHttpRequest()
  xhr.open('get', '/Partials/darkmode.php')
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        location.reload()
      } else {
        alert('Error: ' + xhr.status)
      }
    }
  }
  xhr.send(null)
}
