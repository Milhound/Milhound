function toggleCollapse (target) {
  switch (target) {
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