<?php 
$pageTitle = "services";
include 'header.php'; 
?>

<section style="
    padding: 180px 0 100px;
    background: linear-gradient(135deg, #1d1ba9ff 0%, #000000ff 100%);
    color: white;
    text-align: center;
">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Our Services</h1>
        <p style="font-size: 1.2rem; opacity: 0.8;">Innovative solutions tailored to your business needs</p>
    </div>
</section>

<section style="padding: 80px 0; background-color: white;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <div style="
            display: grid;
            grid-template-columns: 1fr;
            gap: 50px;
        ">

            <!-- AI Chatbot Solutions -->
            <div style="display: grid; grid-template-columns: 100px 1fr 1fr; gap: 40px; align-items: center; background-color: #f8f9fa; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.1)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.05)'">
                <div style="width: 100px; height: 100px; background-color: #0066cc; color: white; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;">
                    <i class="fas fa-robot"></i>
                </div>
                <div style="padding: 30px 0;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: #003366;">AI Chatbot Solutions</h3>
                    <p style="margin-bottom: 20px;">Say hello to faster, friendlier, and smarter customer service. Our intelligent chatbots work round the clock to keep your customers happy and engaged.</p>
                    <ul style="list-style: none; margin: 20px 0;">
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Personalized chatbot</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Multi-platform Integration</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">24/7 Available for your customers</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Speaks in your brand’s unique voice</li>
                    </ul>
                    
                </div>
                <div style="height: 100%; background-color: #ddd; display: flex; align-items: center; justify-content: center;">
  <img src="chatbot.jpej.webp" alt="Custom Tech" style="width: 100%; height: 100%; object-fit: cover;">
</div>

            </div>

            <!-- Web Development -->
            <div style="display: grid; grid-template-columns: 100px 1fr 1fr; gap: 40px; align-items: center; background-color: #f8f9fa; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.1)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.05)'">
                <div style="width: 100px; height: 100px; background-color: #0066cc; color: white; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div style="padding: 30px 0;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: #003366;">Web Development</h3>
                    <p style="margin-bottom: 20px;">We build fast, secure, and stunning websites that work perfectly on every device—and leave a lasting impression.</p>
                    <ul style="list-style: none; margin: 20px 0;">
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Responsive Design</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">E-commerce Solutions</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">CMS Integration</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">SEO Optimized</li>
                    </ul>
                   
                </div>
                <div style="height: 100%; background-color: #ddd; display: flex; align-items: center; justify-content: center;">
  <img src="webdevelopment.jpg" alt="Custom Tech" style="width: 100%; height: 100%; object-fit: cover;">
</div>

            </div>

<!-- App Development -->
            <div style="display: grid; grid-template-columns: 100px 1fr 1fr; gap: 40px; align-items: center; background-color: #f8f9fa; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.1)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.05)'">
                <div style="width: 100px; height: 100px; background-color: #0066cc; color: white; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div style="padding: 30px 0;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: #003366;">App Development</h3>
                    <p style="margin-bottom: 20px;">We build mobile apps that feel smooth, look great, and keep users coming back whether it's for business, e-commerce, or services.</p>
                    <ul style="list-style: none; margin: 20px 0;">
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Android + iOS Development</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Fast, Lightweight Builds</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Scalable and Secure</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Push Notifications & More</li>
                    </ul>
                    
                </div>
                <div style="height: 100%; background-color: #ddd; display: flex; align-items: center; justify-content: center;">
  <img src="appdevelopment.jpg" alt="Custom Tech" style="width: 100%; height: 100%; object-fit: cover;">
</div>

            </div>

            <!-- Custom Tech Solutions -->
            <div style="display: grid; grid-template-columns: 100px 1fr 1fr; gap: 40px; align-items: center; background-color: #f8f9fa; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.1)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.05)'">
                <div style="width: 100px; height: 100px; background-color: #0066cc; color: white; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;">
                    <i class="fas fa-cogs"></i>
                </div>
                <div style="padding: 30px 0;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: #003366;">Custom Tech Solutions</h3>
                    <p style="margin-bottom: 20px;">Tailored software solutions that address your specific business challenges and operational needs.</p>
                    <ul style="list-style: none; margin: 20px 0;">
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Process Automation</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Data Analytics</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">System Integration</li>
                        <li style="margin-bottom: 10px; position: relative; padding-left: 25px;">Scalable Architecture</li>
                    </ul>
                    
                </div>
                <div style="height: 100%; background-color: #ddd; display: flex; align-items: center; justify-content: center;">
  <img src="customtech.jpg" alt="Custom Tech" style="width: 100%; height: 100%; object-fit: cover;">
</div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>