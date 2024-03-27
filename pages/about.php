<?php
include('../template/header.php');
?>
<!-- Main Content -->
<div class="container mx-auto p-8 bg-gray-100 pb-[100px]">
    <h1 class="text-4xl font-bold mb-6">About Us</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Left Column -->
        <div>
            <img src="assets/image/icons/BOOMMINT.svg" alt="Company Image" class="w-full h-auto rounded-md mb-4">
            <p class="text-gray-700 leading-relaxed">
                BoomMint is a leading cryptocurrency exchange platform dedicated to providing seamless and secure transactions for users worldwide. Our mission is to simplify the process of buying and selling various cryptocurrencies, making it accessible to everyone.
            </p>
        </div>

        <!-- Right Column -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
            <p class="text-gray-700 leading-relaxed">
                At BoomMint, we are committed to fostering the adoption of cryptocurrencies by offering a user-friendly platform with transparent pricing and excellent customer support. We believe in empowering individuals to take control of their financial future through the world of digital assets.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">Why Choose BoomMint?</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Secure and transparent transactions</li>
                <li>Wide range of supported cryptocurrencies</li>
                <li>24/7 customer support</li>
                <li>Fast and reliable platform</li>
            </ul>
        </div>
    </div>
</div>

<?php
include('../template/footer.php');
?>