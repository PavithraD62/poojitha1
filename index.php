<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="form-container">
        <h2>Application Form</h2>
        <form id="applicationForm" action="result.php" method="GET">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="usn">USN</label>
                <input type="text" id="usn" name="usn" placeholder="Enter your USN" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <select id="qualification" name="qualification" required>
                    <option value="">Select Qualification</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="postgraduate">Postgraduate</option>
                </select>
            </div>
            <div class="form-group">
                <label for="suggestion">Suggestion</label>
                <textarea id="suggestion" name="suggestion" placeholder="Write your suggestion..." required></textarea>
            </div>
            <button type="submit" class="form-btn">Submit</button>
        </form>
    </div>
</body>
</html>
