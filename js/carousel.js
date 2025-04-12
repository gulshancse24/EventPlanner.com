class Carousel {
    constructor() {
        this.carousel = document.querySelector('.carousel');
        this.slides = document.querySelectorAll('.carousel-item');
        this.prevBtn = document.querySelector('.carousel-prev');
        this.nextBtn = document.querySelector('.carousel-next');
        this.currentIndex = 0;
        this.slideInterval = null;
        this.slideDelay = 5000;
        this.isTransitioning = false;

        this.init();
    }

    init() {
        this.slides.forEach((slide, index) => {
            if (index === 0) {
                slide.style.display = 'block';
                slide.style.opacity = '1';
                slide.classList.add('active');
            } else {
                slide.style.display = 'none';
                slide.style.opacity = '0';
                slide.classList.remove('active');
            }
        });
        this.startAutoSlide();
        this.setupEventListeners();
    }

    showSlide(index) {
        if (this.isTransitioning) return;
        this.isTransitioning = true;

        const currentSlide = this.slides[this.currentIndex];
        const nextSlide = this.slides[index];

        // Hide current slide
        currentSlide.style.opacity = '0';
        currentSlide.classList.remove('active');

        // Show next slide
        nextSlide.style.display = 'block';
        setTimeout(() => {
            nextSlide.style.opacity = '1';
            nextSlide.classList.add('active');
            currentSlide.style.display = 'none';
            this.isTransitioning = false;
        }, 50);

        this.currentIndex = index;
    }

    nextSlide() {
        if (this.isTransitioning) return;
        const nextIndex = (this.currentIndex + 1) % this.slides.length;
        this.showSlide(nextIndex);
    }

    prevSlide() {
        if (this.isTransitioning) return;
        const prevIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
        this.showSlide(prevIndex);
    }

    startAutoSlide() {
        if (this.slideInterval) {
            clearInterval(this.slideInterval);
        }
        this.slideInterval = setInterval(() => this.nextSlide(), this.slideDelay);
    }

    stopAutoSlide() {
        if (this.slideInterval) {
            clearInterval(this.slideInterval);
            this.slideInterval = null;
        }
    }

    setupEventListeners() {
        this.nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            this.stopAutoSlide();
            this.nextSlide();
            this.startAutoSlide();
        });

        this.prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            this.stopAutoSlide();
            this.prevSlide();
            this.startAutoSlide();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                this.stopAutoSlide();
                this.prevSlide();
                this.startAutoSlide();
            } else if (e.key === 'ArrowRight') {
                this.stopAutoSlide();
                this.nextSlide();
                this.startAutoSlide();
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new Carousel();
});