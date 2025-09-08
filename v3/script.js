// Mobile menu functionality
const mobileMenuBtn = document.getElementById("mobile-menu-btn")
const nav = document.getElementById("nav")

mobileMenuBtn.addEventListener("click", () => {
  nav.classList.toggle("active")
  mobileMenuBtn.classList.toggle("active")
})

// Close mobile menu when clicking on a link
const navLinks = document.querySelectorAll(".nav-link")
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active")
    mobileMenuBtn.classList.remove("active")
  })
})

// Tab functionality for evaluation section
const tabButtons = document.querySelectorAll(".tab-btn")
const tabPanels = document.querySelectorAll(".tab-panel")

tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetTab = button.getAttribute("data-tab")

    // Remove active class from all buttons and panels
    tabButtons.forEach((btn) => btn.classList.remove("active"))
    tabPanels.forEach((panel) => panel.classList.remove("active"))

    // Add active class to clicked button and corresponding panel
    button.classList.add("active")
    document.getElementById(targetTab).classList.add("active")
  })
})

// Tab functionality for resources section
const resourceTabButtons = document.querySelectorAll(".resource-tab-btn")
const resourceTabPanels = document.querySelectorAll(".resource-tab-panel")

resourceTabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetTab = button.getAttribute("data-resource-tab")

    // Remove active class from all buttons and panels
    resourceTabButtons.forEach((btn) => btn.classList.remove("active"))
    resourceTabPanels.forEach((panel) => panel.classList.remove("active"))

    // Add active class to clicked button and corresponding panel
    button.classList.add("active")
    document.getElementById(targetTab).classList.add("active")
  })
})

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      const headerHeight = document.querySelector(".header").offsetHeight
      const targetPosition = target.offsetTop - headerHeight - 20

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      })
    }
  })
})

// Download button functionality
const downloadButtons = document.querySelectorAll(".download-btn")
downloadButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault()

    // Get the document name from the parent card
    const card = button.closest(".resource-card")
    const documentName = card.querySelector("h4").textContent

    // Show download notification
    showNotification(`Download gestart: ${documentName}`)

    // In a real implementation, this would trigger an actual download
    // For demo purposes, we'll just show a notification
  })
})

// Notification system
function showNotification(message) {
  // Create notification element
  const notification = document.createElement("div")
  notification.className = "notification"
  notification.textContent = message

  // Style the notification
  notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: #48bb78;
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `

  // Add to page
  document.body.appendChild(notification)

  // Animate in
  setTimeout(() => {
    notification.style.transform = "translateX(0)"
  }, 100)

  // Remove after 3 seconds
  setTimeout(() => {
    notification.style.transform = "translateX(100%)"
    setTimeout(() => {
      document.body.removeChild(notification)
    }, 300)
  }, 3000)
}

// Intersection Observer for scroll animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1"
      entry.target.style.transform = "translateY(0)"
    }
  })
}, observerOptions)

// Observe elements for scroll animations
document.addEventListener("DOMContentLoaded", () => {
  const animatedElements = document.querySelectorAll(".hero-card, .requirement-card, .contact-card, .resource-card")

  animatedElements.forEach((el) => {
    el.style.opacity = "0"
    el.style.transform = "translateY(20px)"
    el.style.transition = "opacity 0.6s ease, transform 0.6s ease"
    observer.observe(el)
  })
})

// Keyboard navigation support
document.addEventListener("keydown", (e) => {
  // ESC key closes mobile menu
  if (e.key === "Escape") {
    nav.classList.remove("active")
    mobileMenuBtn.classList.remove("active")
  }

  // Tab navigation for tab panels
  if (e.key === "ArrowLeft" || e.key === "ArrowRight") {
    const activeTabButton = document.querySelector(".tab-btn.active, .resource-tab-btn.active")
    if (activeTabButton) {
      const isResourceTab = activeTabButton.classList.contains("resource-tab-btn")
      const tabButtons = isResourceTab ? resourceTabButtons : document.querySelectorAll(".tab-btn")
      const currentIndex = Array.from(tabButtons).indexOf(activeTabButton)

      let nextIndex
      if (e.key === "ArrowLeft") {
        nextIndex = currentIndex > 0 ? currentIndex - 1 : tabButtons.length - 1
      } else {
        nextIndex = currentIndex < tabButtons.length - 1 ? currentIndex + 1 : 0
      }

      tabButtons[nextIndex].click()
      tabButtons[nextIndex].focus()
    }
  }
})

// Contact card click to copy email
const contactItems = document.querySelectorAll(".contact-item")
contactItems.forEach((item) => {
  const text = item.textContent.trim()
  if (text.includes("@")) {
    item.style.cursor = "pointer"
    item.title = "Klik om email adres te kopiëren"

    item.addEventListener("click", () => {
      const email = text.split(" ").find((part) => part.includes("@"))
      if (email) {
        navigator.clipboard
          .writeText(email)
          .then(() => {
            showNotification(`Email adres gekopieerd: ${email}`)
          })
          .catch(() => {
            showNotification("Kon email adres niet kopiëren")
          })
      }
    })
  }
})
// Search functionality (basic)
function createSearchBox() {
  const searchContainer = document.createElement("div")
  searchContainer.className = "search-container"
  searchContainer.style.cssText = `
        position: relative;
        margin: 1rem 0;
    `

  const searchInput = document.createElement("input")
  searchInput.type = "text"
  searchInput.placeholder = "Zoek op deze pagina..."
  searchInput.className = "search-input"
  searchInput.style.cssText = `
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    `

  searchInput.addEventListener("focus", () => {
    searchInput.style.borderColor = "#667eea"
  })

  searchInput.addEventListener("blur", () => {
    searchInput.style.borderColor = "#e2e8f0"
  })

  searchInput.addEventListener("input", (e) => {
    const searchTerm = e.target.value.toLowerCase()
    const textElements = document.querySelectorAll("p, h1, h2, h3, h4, li")

    textElements.forEach((element) => {
      const text = element.textContent.toLowerCase()
      if (searchTerm && text.includes(searchTerm)) {
        element.style.backgroundColor = "#fff3cd"
      } else {
        element.style.backgroundColor = ""
      }
    })
  })

  searchContainer.appendChild(searchInput)

  // Add search box to hero section
  const heroContent = document.querySelector(".hero-content")
  heroContent.insertBefore(searchContainer, heroContent.querySelector(".hero-cards"))
}

// Initialize search box
document.addEventListener("DOMContentLoaded", createSearchBox)
