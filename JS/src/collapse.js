function toggleCollapse (x) {
  switch (x){
    case 1:
      document.getElementById('bio-paragraph').classList.toggle('active')
      break;
    case 2:
      document.getElementById('experience').classList.toggle('active')
      break;
    case 3:
      document.getElementById('community').classList.toggle('active')
      break;
    case 4:
      document.getElementById('examples').classList.toggle('active')
      break;
  }
}

function change (x, target) {
  x.classList.toggle('change')
  toggleCollapse(target)
}