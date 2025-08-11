<?php 
$pageTitle = "Home";
include 'header.php'; 
?>

<!-- Background Video -->
<video autoplay muted loop playsinline id="bgVideo">
    <source src="bgvideo3.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<section style="
    height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 80px;
    position: relative;
    overflow: hidden;
">
    <div style="
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    ">
        <h1 style="
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-transform: uppercase;
            animation: fadeInUp 1s ease;
        ">
             <span style="color: #ffffffff;">WELCOME TO THE SMART SIDE OF TECH</span>
        </h1>
        
<h1 style="
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-transform: uppercase;
            animation: fadeInUp 1s ease;
        ">
             <span style="color: #ffffffff;">VECTORNEU</span>
        </h1>

        <p style="
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.8);
            animation: fadeInUp 1s ease 0.2s forwards;
            opacity: 0;
        ">
            Innovating With Bits!
        </p>
        
        <div style="
            max-width: 600px;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.8);
            animation: fadeInUp 1s ease 0.4s forwards;
            opacity: 0;
        ">
            <p style="margin-bottom: 20px; font-size: 1.1rem;">
               AI that adapts, Tech that grows, Innovation that actually makes sense   that's the VectorNeu flow!

            </p>
            <p style="font-size: 1.1rem;">
            We build intelligent solutions that don’t just work; they evolve!.
From smart automation to full-scale systems, we help you grow fast, stay sharp, and lead with confidence
            </p>
        </div>
        
        <a href="about.php" style="
            display: inline-block;
            padding: 12px 30px;
            background-color: #4945c1ff;
            color: white;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
        " onmouseover="this.style.backgroundColor='#4615ccff'" onmouseout="this.style.backgroundColor='#343739ff'">
            Discover More
        </a>
    </div>
</section>

<section style="padding: 100px 0; background-color: white;">
    <div style="
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    ">
        <h2 style="
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #1a67b3ff;
            position: relative;
            display: inline-block;
        ">
            Why Choose VectorNeu?
            <span style="
                content: '';
                position: absolute;
                bottom: -10px;
                left: 0;
                width: 60px;
                height: 3px;
                background-color: #00aaff;
            "></span>
        </h2>
        
        <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        ">
            <div style="
                background-color: #fcfbfbff;
                padding: 40px 30px;
                border-radius: 10px;
                text-align: center;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                z-index: 1;
            " onmouseover="this.style.transform='translateY(-10px)'; this.querySelector('.glow-overlay').style.opacity='1'" 
               onmouseout="this.style.transform='translateY(0)'; this.querySelector('.glow-overlay').style.opacity='0'">
                <div class="glow-overlay" style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0, 102, 204, 0.8);
                    opacity: 0;
                    transition: opacity 0.3s ease;
                    z-index: -1;
                "></div>
                <div style="
                    width: 80px;
                    height: 80px;
                    background-color: #0066cc;
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 20px;
                    font-size: 2rem;
                ">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #003366;">AI-Powered Solutions</h3>
                <p>Let our intelligent systems handle the heavy lifting and speeding up your operations, improving accuracy, and saving time.</p>
            </div>
            
            <div style="
                background-color: #fcfbfbff;
                padding: 40px 30px;
                border-radius: 10px;
                text-align: center;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                z-index: 1;
            " onmouseover="this.style.transform='translateY(-10px)'; this.querySelector('.glow-overlay').style.opacity='1'" 
               onmouseout="this.style.transform='translateY(0)'; this.querySelector('.glow-overlay').style.opacity='0'">
                <div class="glow-overlay" style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0, 102, 204, 0.8);
                    opacity: 0;
                    transition: opacity 0.3s ease;
                    z-index: -1;
                "></div>
                <div style="
                    width: 80px;
                    height: 80px;
                    background-color: #0066cc;
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 20px;
                    font-size: 2rem;
                ">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #003366;">Custom Development</h3>
                <p>We design and develop everything your business needs
                    web platforms, mobile apps, ERP systems, and custom software.</p>
            </div>
            
            <div style="
                background-color: #f8f9fa;
                padding: 40px 30px;
                border-radius: 10px;
                text-align: center;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                z-index: 1;
            " onmouseover="this.style.transform='translateY(-10px)'; this.querySelector('.glow-overlay').style.opacity='1'" 
               onmouseout="this.style.transform='translateY(0)'; this.querySelector('.glow-overlay').style.opacity='0'">
                <div class="glow-overlay" style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0, 102, 204, 0.8);
                    opacity: 0;
                    transition: opacity 0.3s ease;
                    z-index: -1;
                "></div>
                <div style="
                    width: 80px;
                    height: 80px;
                    background-color: #0066cc;
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 20px;
                    font-size: 2rem;
                ">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #003366;">Chatbot Technology</h3>
                <p>We build chatbots that speak naturally, solve problems, and keep your customers engaged in both day or night.</p>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #bgVideo {
        position: fixed;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    /* Adding a pulse animation for the icons */
    .feature-box:hover i {
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }

    /* Adding a subtle border animation */
    .feature-box {
        position: relative;
    }

    .feature-box::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border-radius: 12px;
        background: linear-gradient(45deg, #0066cc, #00aaff, #0066cc);
        background-size: 200% 200%;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .feature-box:hover::before {
        opacity: 1;
        animation: gradientShift 3s ease infinite;
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>

<?php include 'footer.php'; ?>