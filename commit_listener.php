<?php
// Parse the incoming JSON payload
$payload = json_decode(file_get_contents('php://input'), true);

// Extract relevant information from the payload
$plateforme = "GitHub"; // Set platform as GitHub
$repo = $payload['repository']['name'];
$branch = $payload['ref'];
$commit_title = $payload['head_commit']['message'];
$user_name = $payload['head_commit']['author']['name'];

// Construct the GitHub user profile picture URL
$user_id = $payload['head_commit']['author']['username']; // Assuming the username is provided in the payload
$user_pp = "https://github.com/{$user_id}.png?size=40"; // Construct the profile picture URL

// Connect to MySQL database
$mysqli = new mysqli("localhost", "unisteal_admin", "RageSCPjump5", "unisteal_commit");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare SQL statement to insert the commit data into the database
$sql = "INSERT INTO commits (plateforme, repo, branch, commit_title, user_name, user_pp) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("ssssss", $plateforme, $repo, $branch, $commit_title, $user_name, $user_pp);
$stmt->execute();

// Close statement
$stmt->close();

// Close database connection
$mysqli->close();

// Redirect back to the referring page (optional)
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit();
