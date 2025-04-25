<main>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div class="welcome-text-container">
                    <h1 class="animate-text">WELCOME TO TALIBON CREDIT COOPERATIVE</h1>
                    <p class="lead mt-3 animate-text-delay">Serving the community with financial solutions since 1991</p>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-piggy-bank" style="font-size: 2.5rem; color: #1f1982;"></i>
                                    <h3 class="card-title mt-3">Savings</h3>
                                    <p class="card-text">Secure your future with our competitive savings programs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-cash-coin" style="font-size: 2.5rem; color: #1f1982;"></i>
                                    <h3 class="card-title mt-3">Loans</h3>
                                    <p class="card-text">Flexible loan options tailored to meet your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-people" style="font-size: 2.5rem; color: #1f1982;"></i>
                                    <h3 class="card-title mt-3">Community</h3>
                                    <p class="card-text">Join our growing family of members and enjoy exclusive benefits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Add Bootstrap icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css");

    main {
        min-height: 80vh;
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
    }
    
    .welcome-text-container {
        padding: 3rem 0;
    }
    
    .animate-text {
        color: #1f1982;
        font-weight: bold;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1.5s forwards;
    }
    
    .animate-text-delay {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1.5s forwards 0.5s;
    }
    
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Animation variations that will be randomly selected on page load */
    .animation-slide-left {
        animation: slideFromLeft 1.2s forwards;
    }
    
    .animation-slide-right {
        animation: slideFromRight 1.2s forwards;
    }
    
    .animation-zoom-in {
        animation: zoomIn 1.5s forwards;
    }
    
    .animation-bounce {
        animation: bounce 1.2s forwards;
    }
    
    @keyframes slideFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideFromRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes zoomIn {
        0% {
            opacity: 0;
            transform: scale(0.5);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }
    
    .card {
        transition: transform 0.3s;
    }
    
    .card:hover {
        transform: translateY(-10px);
    }
</style>

<script>
    // Function to randomly select an animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const animations = [
            'animate-text',
            'animation-slide-left',
            'animation-slide-right',
            'animation-zoom-in',
            'animation-bounce'
        ];
        
        const welcomeText = document.querySelector('h1');
        const subText = document.querySelector('.lead');
        
        // Remove existing animation classes
        welcomeText.classList.remove('animate-text');
        subText.classList.remove('animate-text-delay');
        
        // Get random animation
        const randomAnimation = animations[Math.floor(Math.random() * animations.length)];
        
        // Apply random animation to welcome text
        welcomeText.classList.add(randomAnimation);
        
        // Apply a similar but slightly delayed animation to the subtext
        subText.classList.add(randomAnimation);
        subText.style.animationDelay = '0.5s';
    });
</script>