// Modal Box
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButtons = document.querySelectorAll('.item-detail-button');
const closeModal = document.querySelector('.modal .close-icon');

document.addEventListener('DOMContentLoaded', (event) => {
  // Toggle class active untuk hamburger menu
  const navbarNav = document.querySelector('.navbar-nav');
  const hamburgerMenu = document.querySelector('#hamburger-menu');

  if (hamburgerMenu) {
    hamburgerMenu.onclick = () => {
      navbarNav.classList.toggle('active');
    };
  }

  // Toggle class active untuk search form
  const searchForm = document.querySelector('.search-form');
  const searchBox = document.querySelector('#search-box');
  const searchButton = document.querySelector('#search-button');

  if (searchButton) {
    searchButton.onclick = (e) => {
      searchForm.classList.toggle('active');
      searchBox.focus();
      e.preventDefault();
    };
  }

  // Toggle class active untuk shopping cart
  const shoppingCart = document.querySelector('.shopping-cart');
  const shoppingCartButton = document.querySelector('#shopping-cart-button');

  if (shoppingCartButton) {
    shoppingCartButton.onclick = (e) => {
      shoppingCart.classList.toggle('active');
      e.preventDefault();
    };
  }

  // Klik di luar elemen
  document.addEventListener('click', function (e) {
    if (hamburgerMenu && !hamburgerMenu.contains(e.target) && !navbarNav.contains(e.target)) {
      navbarNav.classList.remove('active');
    }

    if (searchButton && !searchButton.contains(e.target) && !searchForm.contains(e.target)) {
      searchForm.classList.remove('active');
    }

    if (shoppingCartButton && !shoppingCartButton.contains(e.target) && !shoppingCart.contains(e.target)) {
      shoppingCart.classList.remove('active');
    }
  });

  if (itemDetailModal.length && itemDetailButtons.length > 0) {
    itemDetailButtons.forEach((btn) => {
      btn.onclick = (e) => {
        itemDetailModal.style.display = 'flex';
        e.preventDefault();
      };
    });
  }

  // klik tombol close modal
  if (closeModal) {
    closeModal.onclick = (e) => {
      itemDetailModal.style.display = 'none';
      e.preventDefault();
    };
  }
});

// klik di luar modal
window.onload = () => {
  window.onclick = (e) => {
      if (e.target === itemDetailModal) {
          itemDetailModal.style.display = 'none';
      }
  };
};

document.addEventListener('alpine:init', () => {
  Alpine.data('menu', () => ({
      items: [
          { id: 1, name: 'Latte', img: 'img/coffee latte cup.jpeg', price: 25000 },
          { id: 2, name: 'Espresso', img: 'img/download (1).jpeg', price: 10000 },
          { id: 3, name: 'Cappucino', img: 'img/cappucino.jpg', price: 20000 },
          { id: 4, name: 'Avogato', img: 'img/avogatoo.jpg', price: 28000 },
          { id: 5, name: 'Aren Latte', img: 'img/aren latte.jpeg', price: 22000 },
          { id: 6, name: 'Mochaccino', img: 'img/Mocha recipe.jpeg', price: 23000 }
      ],
  }));
  console.log("AWOALWOALWO");

  Alpine.store('cart', {
      items: [],
      total: 0,
      quantity: 0,
      add(newItem) {
        this.items.push(newItem);
        this.quantity++;
        this.total += newItem.price;
          console.log(this.items);
      }
  })
});



