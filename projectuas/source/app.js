
// klik di luar modal
window.onload = () => {
    window.onclick = (e) => {
        if (e.target === itemDetailModal) {
            itemDetailModal.style.display = 'none';
        }
    };
};document.addEventListener('alpine:init', () => {
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

    Alpine.store('cart', {
        items: [],
        total:0,
        quantity: 0,
        add(newItem) {
            console.log(newItem);

        }
    })
});



