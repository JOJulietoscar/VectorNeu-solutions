<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php'; // Your existing database connection file

$pageTitle = "Admin Dashboard";
include 'header.php'; 
?>

<section style="padding: 100px 0; background-color: #f8f9fa;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <h1 style="font-size: 2.5rem; margin-bottom: 30px; color: #003366;">Contact Form Submissions</h1>
        
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 20px;">
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #0066cc; color: white;">
                            <th style="padding: 15px; text-align: left;">ID</th>
                            <th style="padding: 15px; text-align: left;">Name</th>
                            <th style="padding: 15px; text-align: left;">Email</th>
                            <th style="padding: 15px; text-align: left;">Phone</th>
                            <th style="padding: 15px; text-align: left;">Subject</th>
                            <th style="padding: 15px; text-align: left;">Date</th>
                            <th style="padding: 15px; text-align: left;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch submissions from database
                        $sql = "SELECT * FROM contact_form ORDER BY created_at DESC";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr style='border-bottom: 1px solid #eee;'>";
                                echo "<td style='padding: 15px;'>" . $row['id'] . "</td>";
                                echo "<td style='padding: 15px;'>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td style='padding: 15px;'>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td style='padding: 15px;'>" . htmlspecialchars($row['phone']) . "</td>";
                                echo "<td style='padding: 15px;'>" . htmlspecialchars($row['subject']) . "</td>";
                                echo "<td style='padding: 15px;'>" . date('M j, Y g:i A', strtotime($row['created_at'])) . "</td>";
                                echo "<td style='padding: 15px;'>
                                        <a href='view_submission.php?id=" . $row['id'] . "' style='color: #0066cc; text-decoration: none; margin-right: 10px;'><i class='fas fa-eye'></i> View</a> 
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' style='padding: 15px; text-align: center;'>No submissions found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div style="margin-top: 30px; text-align: right;">
                <a href="logout.php" style="
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #cc0000;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#ff0000'" onmouseout="this.style.backgroundColor='#cc0000'">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>