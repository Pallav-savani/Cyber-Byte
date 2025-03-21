/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  toggle.addEventListener('click', () =>{
      // Add show-menu class to nav menu
      nav.classList.toggle('show-menu')
      // Add show-icon to show and hide menu icon
      toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll'): scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

// ========= view all btn ========= 
function ok(){
  window.location = "../category/main.php";
}

function signup(){
  window.location= "../signup/signup.html";
}

