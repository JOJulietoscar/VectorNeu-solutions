<?php
session_start();

// Check if already logged in
if (isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_dashboard.php');
    exit;
}

// Default credentials (you should change these)
$admin_username = 'admin';
$admin_password = 'admin123'; // In production, use hashed passwords

// Handle login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

$pageTitle = "Admin Login";
include 'header.php'; 
?>

<section style="padding: 100px 0; background-color: #f8f9fa;">
    <div style="width: 90%; max-width: 400px; margin: 0 auto;">
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 30px;">
            <h1 style="font-size: 2rem; margin-bottom: 30px; color: #003366; text-align: center;">Admin Login</h1>
            
            <?php if (isset($error)): ?>
            <div style="background-color: #ffebee; color: #cc0000; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>
            
            <form method="POST" action="admin_login.php">
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Username</label>
                    <input type="text" name="username" required style="
                        width: 100%;
                        padding: 10px 15px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        font-size: 1rem;
                    ">
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Password</label>
                    <input type="password" name="password" required style="
                        width: 100%;
                        padding: 10px 15px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        font-size: 1rem;
                    ">
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
                    cursor: pointer;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                    Login
                </button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>