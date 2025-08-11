<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php';

$id = $_GET['id'] ?? 0;
$submission = [];

// Fetch specific submission
$stmt = $conn->prepare("SELECT * FROM contact_form WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$submission = $result->fetch_assoc();
$stmt->close();

if (!$submission) {
    header('Location: admin_dashboard.php');
    exit;
}

$pageTitle = "View Submission";
include 'header.php'; 
?>

<section style="padding: 100px 0; background-color: #f8f9fa;">
    <div style="width: 90%; max-width: 800px; margin: 0 auto;">
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 30px;">
            <h1 style="font-size: 2rem; margin-bottom: 30px; color: #003366; border-bottom: 2px solid #0066cc; padding-bottom: 10px;">
                Submission Details
            </h1>
            
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Name</h3>
                <p><?php echo htmlspecialchars($submission['name']); ?></p>
            </div>
            
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Email</h3>
                <p><?php echo htmlspecialchars($submission['email']); ?></p>
            </div>
            
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Phone</h3>
                <p><?php echo htmlspecialchars($submission['phone']); ?></p>
            </div>
            
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Message</h3>
                <p><?php echo nl2br(htmlspecialchars($submission['message'])); ?></p>
            </div>
            
            <?php if (!empty($submission['file_path'])): ?>
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Attachment</h3>
                <a href="<?php echo htmlspecialchars($submission['file_path']); ?>" target="_blank" style="color: #0066cc; text-decoration: none;">
                    <i class="fas fa-paperclip"></i> Download File
                </a>
            </div>
            <?php endif; ?>
            
            <div style="margin-bottom: 20px;">
                <h3 style="font-size: 1.2rem; color: #0066cc; margin-bottom: 5px;">Submitted On</h3>
                <p><?php echo date('M j, Y g:i A', strtotime($submission['created_at'])); ?></p>
            </div>
            
            <div style="margin-top: 30px;">
                <a href="admin_dashboard.php" style="
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #0066cc;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-right: 10px;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#00aaff'" onmouseout="this.style.backgroundColor='#0066cc'">
                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                </a>
                
                <a href="delete_submission.php?id=<?php echo $submission['id']; ?>" style="
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #cc0000;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#ff0000'" onmouseout="this.style.backgroundColor='#cc0000'" onclick="return confirm('Are you sure you want to delete this submission?')">
                    <i class="fas fa-trash"></i> Delete Submission
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>