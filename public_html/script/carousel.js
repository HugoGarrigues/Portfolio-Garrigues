const galleryContainer = document.querySelector('.gallery-container');
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {
    constructor(container, items) {
        this.carouselContainer = container;
        this.carouselArray = [...items];
    }

    updateGallery() {
        this.carouselArray.forEach(el => {
            el.classList.remove('gallery-item-1');
            el.classList.remove('gallery-item-2');
            el.classList.remove('gallery-item-3');
        });

        this.carouselArray.slice(0, 3).forEach((el, i) => {
            el.classList.add(`gallery-item-${i+1}`);
        });
    }

    setCurrentState(clickedItem) {
        const currentIndex = this.carouselArray.indexOf(clickedItem);
        if (currentIndex === 1) {
            return;
        } else if (currentIndex === 0) {
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }

    useControls() {
        this.carouselArray.forEach(item => {
            item.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(item);
            });
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems);

exampleCarousel.updateGallery();
exampleCarousel.useControls();
