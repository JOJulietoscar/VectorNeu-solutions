<?php 
$pageTitle = "Contact";
include 'header.php'; 
?>

<section style="
    padding: 180px 0 100px;
    background: linear-gradient(135deg, #1d1ba9ff 0%, #000000ff 100%);
    color: white;
    text-align: center;
">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Contact Us</h1>
        <p style="font-size: 1.2rem; opacity: 0.8;">Get in touch with our team</p>
    </div>
</section>

<section style="padding: 80px 0; background-color: white;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <div style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        ">
            <div>
                <h2 style="
                    font-size: 2.5rem;
                    margin-bottom: 1.5rem;
                    color: #003366;
                    position: relative;
                    display: inline-block;
                ">
                    Our Office
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
                
                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-map-marker-alt" style="font-size: 1.2rem; color: #0066cc; margin-right: 15px; margin-top: 5px;"></i>
                        <p>Coimbatore, Tamil Nadu, India</p>
                    </div>
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-phone" style="font-size: 1.2rem; color: #0066cc; margin-right: 15px; margin-top: 5px;"></i>
                        <p>+91 9488005400</p>
                    </div>
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-envelope" style="font-size: 1.2rem; color: #0066cc; margin-right: 15px; margin-top: 5px;"></i>
                        <p>info@vectorneusolutions.com</p>
                    </div>
                </div>
                
                <h3 style="
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    color: #003366;
                ">
                    Business Hours
                </h3>
                
                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                        <i class="fas fa-clock" style="font-size: 1.2rem; color: #0066cc; margin-right: 15px; margin-top: 5px;"></i>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                    <div style="display: flex; align-items: flex-start;">
                        <i class="fas fa-clock" style="font-size: 1.2rem; color: #0066cc; margin-right: 15px; margin-top: 5px;"></i>
                        <p>Saturday: 10:00 AM - 2:00 PM</p>
                    </div>
                </div>
                
                <h3 style="
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    color: #003366;
                ">
                    Follow Us
                </h3>
                
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="
                        width: 40px;
                        height: 40px;
                        background-color: #0066cc;
                        color: white;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="
                        width: 40px;
                        height: 40px;
                        background-color: #0066cc;
                        color: white;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="
                        width: 40px;
                        height: 40px;
                        background-color: #0066cc;
                        color: white;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" style="
                        width: 40px;
                        height: 40px;
                        background-color: #0066cc;
                        color: white;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h2 style="
                    font-size: 2.5rem;
                    margin-bottom: 1.5rem;
                    color: #003366;
                    position: relative;
                    display: inline-block;
                ">
                    Send Us a Message
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
                
                <form action="process_contact.php" method="post" enctype="multipart/form-data" style="
                    background-color: #f8f9fa;
                    padding: 30px;
                    border-radius: 10px;
                ">
                    <div style="margin-bottom: 20px;">
                        <input type="text" name="name" placeholder="Your Name" required style="
                            width: 100%;
                            padding: 12px 15px;
                            border: 1px solid #ddd;
                            border-radius: 5px;
                            font-size: 1rem;
                        ">
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <input type="email" name="email" placeholder="Your Email" required style="
                            width: 100%;
                            padding: 12px 15px;
                            border: 1px solid #ddd;
                            border-radius: 5px;
                            font-size: 1rem;
                        ">
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <input type="tel" name="phone" placeholder="Phone Number" style="
                            width: 100%;
                            padding: 12px 15px;
                            border: 1px solid #ddd;
                            border-radius: 5px;
                            font-size: 1rem;
                        ">
                    </div>
                
                    
                    <div style="margin-bottom: 20px;">
                        <textarea name="message" placeholder="Your Message" rows="5" required style="
                            width: 100%;
                            padding: 12px 15px;
                            border: 1px solid #ddd;
                            border-radius: 5px;
                            font-size: 1rem;
                            resize: vertical;
                        "></textarea>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <label style="
                            display: block;
                            margin-bottom: 10px;
                            font-weight: 500;
                            color: #003366;
                        ">
                            Attach File (Optional)
                        </label>
                        <label style="
                            display: inline-block;
                            padding: 10px 15px;
                            background-color: #0066cc;
                            color: white;
                            border-radius: 5px;
                            cursor: pointer;
                            transition: all 0.3s ease;
                        " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                            <i class="fas fa-paperclip" style="margin-right: 5px;"></i> Choose File
                            <input type="file" name="attachment" style="display: none;" onchange="document.getElementById('file-name').textContent = this.files[0] ? this.files[0].name : 'No file chosen'">
                        </label>
                        <span id="file-name" style="margin-left: 10px; color: #666;">No file chosen</span>
                    </div>
                    
                    <button type="submit" style="
                        width: 100%;
                        padding: 12px;
                        background-color: #0066cc;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        font-size: 1rem;
                        font-weight: 600;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>