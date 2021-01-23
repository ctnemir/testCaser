const navigation = document.querySelector('[role="navigation"]')
const navigationTrigger = document.querySelector('[data-trigger="navigation-collapse"]')
let currentPos

if (navigationTrigger) {
  navigationTrigger.addEventListener('click', () => {
    if (document.body.classList.contains('navigation-open')) {
      document.body.classList.remove('navigation-open')
      navigation.classList.add('navbar-light')
      navigation.classList.remove('navbar-dark')
    } else {
      document.body.classList.add('navigation-open')
      navigation.classList.add('navbar-dark')
      navigation.classList.remove('navbar-light')
    }
  })

  window.addEventListener('scroll', () => {
    if (window.scrollY >= 150) {
      navigation.classList.add('navigation-transparent')
    }
    if (currentPos >= window.scrollY) {
      navigation.classList.remove('navigation-transparent')
    }
    currentPos = window.scrollY
  })
}
