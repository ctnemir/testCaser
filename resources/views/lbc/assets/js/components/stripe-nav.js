function stripeNavDropdowns(e) {
  if (e) {
    let t = this
    this.container = e
    this.root = this.container.querySelector('.stripe-nav-root')
    this.dropdownBackground = this.container.querySelector('.stripe-nav-dropdown-background')
    this.dropdownBackgroundAlt = this.container.querySelector('.stripe-nav-dropdown-background-alt')
    this.dropdownContainer = this.container.querySelector('.stripe-nav-dropdown-container')
    this.dropdownArrow = this.container.querySelector('.stripe-nav-arraw')
    this.dropdownRoots = Strut.queryArray('.stripe-nav-has-dropdown', this.root)
    this.dropdownSections = Strut.queryArray('.stripe-nav-dropdown-section', this.container).map(function (e) {
      return {
        el: e,
        name: e.getAttribute('data-stripe-dropdown'),
        content: e.querySelector('.stripe-nav-dropdown-content')
      }
    })

    let n = window.PointerEvent ? {
      end: 'pointerup',
      enter: 'pointerenter',
      leave: 'pointerleave'
    } : {
      end: 'touchend',
      enter: 'mouseenter',
      leave: 'mouseleave'
    }

    this.dropdownRoots.forEach(function (e) {
      e.addEventListener('click', function (n) {
        n.preventDefault()
      })

      e.addEventListener(n.end, function (n) {
        n.preventDefault()
        n.stopPropagation()
        t.toggleDropdown(e)
      })

      e.addEventListener(n.enter, function (n) {
        if (n.pointerType === 'touch') return
        t.stopCloseTimeout(), t.openDropdown(e)
      })

      e.addEventListener(n.leave, function (e) {
        if (e.pointerType === 'touch') return
        t.startCloseTimeout()
      })
    })

    this.dropdownContainer.addEventListener(n.end, function (e) {
      e.stopPropagation()
    })

    this.dropdownContainer.addEventListener(n.enter, function (e) {
      if (e.pointerType === 'touch') return
      t.stopCloseTimeout()
    })

    this.dropdownContainer.addEventListener(n.leave, function (e) {
      if (e.pointerType === 'touch') return
      t.startCloseTimeout()
    })

    document.body.addEventListener(n.end, function (e) {
      t.closeDropdown()
    })
  }
}

let Strut = {
  queryArray: function (e, t) {
    return t || (t = document.body), Array.prototype.slice.call(t.querySelectorAll(e))
  },
  ready: function (e) {
    document.readyState !== 'loading' ? e() : document.addEventListener('DOMContentLoaded', e)
  }
}

stripeNavDropdowns.prototype.openDropdown = function (e) {
  let t = this;
  if (this.activeDropdown === e) {
    return
  }

  this.container.classList.add('overlayActive')
  this.container.classList.add('stripe-nav-dropdown-active')
  this.activeDropdown = e
  this.dropdownRoots.forEach(function (e, t) {
    e.classList.remove('active')
  })

  e.classList.add('active')

  let n = e.getAttribute('data-stripe-dropdown')
  let r = 'left'
  let i
  let s
  let o

  this.dropdownSections.forEach(function (e) {
    e.el.classList.remove('active')
    e.el.classList.remove('left')
    e.el.classList.remove('right')

    if (e.name === n) {
      e.el.classList.add('active')
      r = 'right'
      i = e.content.offsetWidth
      s = e.content.offsetHeight
      o = e.content
    } else {
      e.el.classList.add(r)
    }
  })

  let u = 520
  let a = 400
  let f = i / u
  let l = s / a
  let c = e.getBoundingClientRect()
  let mainContainerPos = this.container.getBoundingClientRect()
  let mainContainerLeft = mainContainerPos.left
  let cLeft = c.left - mainContainerLeft
  let h = cLeft + c.width / 2 - i / 2;
  h = Math.round(Math.max(h, 10))

  clearTimeout(this.disableTransitionTimeout)

  this.enableTransitionTimeout = setTimeout(function () {
    t.container.classList.remove('noDropdownTransition')
  }, 50)

  if (this.container.dataset.device === 'desktop') {
    this.dropdownBackground.style.transform = "translateX(" + h + "px) scaleX(" + f + ") scaleY(" + l + ")"
  } else {
    this.dropdownBackground.style.transform = "translateX(0) scaleX(1) scaleY(" + l + ")"

    let root = this.root
    let arrow = this.dropdownArrow
    let activeTab = root.querySelector('.active')
    if (activeTab) {
      setTimeout(function () {
        var activeOffset = activeTab.offsetLeft + (activeTab.offsetWidth / 2)
        var centerPosition = activeOffset - (root.offsetWidth / 2)
        root.scroll({left: centerPosition})

        if (centerPosition <= 0) {
          centerPosition = 0
        }
        let tabCenter = activeTab.offsetLeft + (activeTab.offsetWidth / 2)
        arrow.style.transform = "translateX(" + (tabCenter - centerPosition) + "px) rotate(45deg)"
      }, 0)
    }
  }
  this.dropdownContainer.style.transform = "translateX(" + h + "px)"
  this.dropdownContainer.style.width = i + "px"
  this.dropdownContainer.style.height = s + "px"

  if (this.container.dataset.device === 'desktop') {
    let p = Math.round(cLeft + c.width / 2)
    this.dropdownArrow.style.transform = "translateX(" + p + "px) rotate(45deg)"
  }

  let d = o.children[0].offsetHeight / l
  this.dropdownBackgroundAlt.style.transform = "translateY(" + d + "px)"
}

stripeNavDropdowns.prototype.closeDropdown = function () {
  let e = this;
  if (!this.activeDropdown) {
    return
  }
  this.dropdownRoots.forEach(function (e, t) {
    e.classList.remove('active')
  })

  clearTimeout(this.enableTransitionTimeout)

  this.disableTransitionTimeout = setTimeout(function () {
    e.container.classList.add('noDropdownTransition')
  }, 50)

  this.container.classList.remove('overlayActive')
  this.container.classList.remove('stripe-nav-dropdown-active')
  this.activeDropdown = undefined
}

stripeNavDropdowns.prototype.toggleDropdown = function (e) {
  this.activeDropdown === e ? this.closeDropdown() : this.openDropdown(e)
}

stripeNavDropdowns.prototype.startCloseTimeout = function () {
  let e = this
  e.closeDropdownTimeout = setTimeout(function () {
    e.closeDropdown()
  }, 50)
}

stripeNavDropdowns.prototype.stopCloseTimeout = function () {
  let e = this;
  clearTimeout(e.closeDropdownTimeout)
}

Strut.ready(function () {
  let stripeNavs = document.querySelectorAll('[data-role="stripe-nav"]')
  stripeNavs.forEach(function (stripeNav) {
    new stripeNavDropdowns(stripeNav)
  })
})
