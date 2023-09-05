const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

const cardWidth = 250; // Change this to match the width of your product cards

nxtBtn.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        productContainers[i].scrollLeft += cardWidth;
    });
});

preBtn.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        productContainers[i].scrollLeft -= cardWidth;
    });
});
