function toggleCollapse (x) {
  switch (x){
    case 1:
      document.getElementById('bio-paragraph').classList.toggle('toggled')
      break;
    case 2:
      document.getElementById('experience').classList.toggle('toggled')
      break;
    case 3:
      document.getElementById('community').classList.toggle('toggled')
      break;
  }
}

function change (x, target) {
  x.classList.toggle('change')
  toggleCollapse(target)
}