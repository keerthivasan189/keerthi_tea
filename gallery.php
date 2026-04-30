<?php include 'header.php'; ?>

<!-- Breadcrumb Start -->
<div class="breadcrumb-banner">
    <div class="breadcrumb-overlay">
        <div class="breadcrumb-container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<section class="gallery-section">
    <div class="gallery-header">
        <h1 class="breadcrumb-title" style="color: #2e7d32; margin-bottom: 15px; margin-top:-40px;">Keerthi Tea Gallery</h1>
        <p class="gallery-text">
            Explore the world of Keerthi Tea Product. From the lush green plantations to the art of perfect blending, our gallery showcases our commitment to purity and quality.
        </p>
    </div>

    <div class="gallery-grid">
        <div class="gallery-item wide">
            <a href="img/keerthi_tea_lifestyle_1777551578765.png" data-fancybox="gallery">
                <img src="img/keerthi_tea_lifestyle_1777551578765.png" alt="Keerthi Tea Lifestyle">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_tea_leaves_close_1777551736072.png" data-fancybox="gallery">
                <img src="img/keerthi_tea_leaves_close_1777551736072.png" alt="Pure Tea Leaves">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_tea_brewing_glass_1777551752574.png" data-fancybox="gallery">
                <img src="img/keerthi_tea_brewing_glass_1777551752574.png" alt="Tea Brewing">
            </a>
        </div>

        <div class="gallery-item wide">
            <a href="img/keerthi_tea_garden_view_1777551768784.png" data-fancybox="gallery">
                <img src="img/keerthi_tea_garden_view_1777551768784.png" alt="Tea Plantation">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_masala_tea_ingredients_1777551788054.png" data-fancybox="gallery">
                <img src="img/keerthi_masala_tea_ingredients_1777551788054.png" alt="Masala Ingredients">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_masala_tea_packet_1777551134817.png" data-fancybox="gallery">
                <img src="img/keerthi_masala_tea_packet_1777551134817.png" alt="Keerthi Masala Tea">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_green_tea_packet_1777551153400.png" data-fancybox="gallery">
                <img src="img/keerthi_green_tea_packet_1777551153400.png" alt="Keerthi Green Tea">
            </a>
        </div>

        <div class="gallery-item">
            <a href="img/keerthi_assam_tea_packet_1777551169763.png" data-fancybox="gallery">
                <img src="img/keerthi_assam_tea_packet_1777551169763.png" alt="Keerthi Assam Tea">
            </a>
        </div>
    </div>
</section>

<style>
.gallery-section {
    padding: 80px 8%;
    background: #f6fff6;
}

.gallery-header {
    text-align: center;
    max-width: 700px;
    margin: auto;
    margin-bottom: 50px;
}

.gallery-text {
    font-size: 16px;
    font-weight: 500;
    color: #2e7d32;
    line-height: 1.4;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 15px;
    position: relative;
    cursor: pointer;
    height: 260px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-item.wide {
    grid-column: span 2;
    height: 260px;
}

@media(max-width:900px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .gallery-item.wide {
        grid-column: span 2;
    }
}

@media(max-width:500px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    .gallery-item.wide {
        grid-column: span 1;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

<script>
Fancybox.bind("[data-fancybox='gallery']", {
    Toolbar: {
        display: [
            "counter", "zoom", "slideshow", "fullscreen", "thumbs", "share", "close"
        ]
    }
});
</script>

<?php include 'footer.php'; ?>