<?php include("header.php"); ?>

<div class="breadcrumb-banner">
    <div class="breadcrumb-overlay">
        <div class="breadcrumb-container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Product Catalog</li>
            </ul>
        </div>
    </div>
</div>

<section class="menu-section">
    <div class="container">
        <h1 class="menu-title">Our Tea Catalog</h1>
        
        <?php
        $catalog = [
            "Signature Powders" => [
                ["name"=>"Keerthi Masala Tea","img"=>"img/keerthi_masala_tea_packet_1777551134817.png"],
                ["name"=>"Keerthi Cardamom Tea","img"=>"img/keerthi_masala_tea_packet_1777551134817.png"],
                ["name"=>"Keerthi Assam Strong","img"=>"img/keerthi_assam_tea_packet_1777551169763.png"],
                ["name"=>"Keerthi Ginger Special","img"=>"img/keerthi_masala_tea_packet_1777551134817.png"]
            ],
            "Premium Leaves" => [
                ["name"=>"Keerthi Green Tea","img"=>"img/keerthi_green_tea_packet_1777551153400.png"],
                ["name"=>"Keerthi Whole Leaf Assam","img"=>"img/keerthi_assam_tea_packet_1777551169763.png"],
                ["name"=>"Keerthi Earl Grey","img"=>"img/keerthi_green_tea_packet_1777551153400.png"]
            ],
            "Gift Collections" => [
                ["name"=>"Keerthi Gift Box","img"=>"img/keerthi_tea_lifestyle_1777551578765.png"],
                ["name"=>"Keerthi Sampler Pack","img"=>"img/keerthi_masala_tea_ingredients_1777551788054.png"]
            ]
        ];

        foreach($catalog as $category => $items){
        ?>
            <div class="menu-category">
                <h2><?php echo $category; ?></h2>
                <div class="menu-grid">
                    <?php 
                    $delay = 0;
                    foreach($items as $item){ 
                    ?>
                        <div class="menu-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                            <div class="menu-img">
                                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                            </div>
                            <span class="item-name"><?php echo $item['name']; ?></span>
                        </div>
                    <?php 
                        $delay += 100;
                    } 
                    ?>
                </div>
            </div>
        <?php } ?>

        <div class="text-center mt-5">
            <a href="shop.php" class="btn-red">Shop Full Collection</a>
        </div>
    </div>
</section>

<style>
.menu-section {
    padding: 80px 0;
    background: #fdfcf6;
}

.menu-title {
    text-align: center;
    font-size: 3rem;
    color: var(--dark);
    margin-bottom: 60px;
    font-weight: 800;
}

.menu-category {
    margin-bottom: 70px;
}

.menu-category h2 {
    text-align: center;
    font-size: 1.8rem;
    color: var(--red);
    margin-bottom: 40px;
    position: relative;
    padding-bottom: 15px;
}

.menu-category h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: var(--green);
}

.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.menu-item {
    background: #fff;
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.menu-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.menu-img {
    height: 200px;
    margin-bottom: 20px;
    overflow: hidden;
    border-radius: 15px;
}

.menu-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: 0.5s;
}

.menu-item:hover .menu-img img {
    transform: scale(1.1);
}

.item-name {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark);
}

@media (max-width: 768px) {
    .menu-title { font-size: 2.2rem; }
    .menu-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 480px) {
    .menu-grid { grid-template-columns: 1fr; }
}
</style>

<?php include("footer.php"); ?>