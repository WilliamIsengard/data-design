<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>User Story, Use Case, and Interaction Flow</title>
	</head>
	<body>
		<h1>Data Design Project</h1>
			<h2>User Story</h2>
				<p>As a user, Andy needs to network with key employees at local employers in her industry.</p>
			<h2>Use Case</h2>
				<ul>
					<li><strong>Title:</strong> Connecting with employees at desired company.</li>
					<li><strong>Description:</strong> Andy wants to connect with current employees at a company she intends on applying.</li>
					<li><strong>Name of User and Their Role:</strong> Andy, a 26-year old radiologic technologist wanting to network for career growth.</li>
					<li><strong>Usage Preconditions:</strong> Must have active LinkedIn account with completed profile and online access.</li>
					<li><strong>Usage Postconditions:</strong> Connection request is sent to target user and Andy is notified when accepted.</li>
				</ul>
			<h2>Interaction Flow</h2>
				<ul>
					<li>Andy enters linkedin.com in her browser.</li>
					<li>Server returns Andy's main LinkedIn page.</li>
					<li>Andy enters Presbyterian in search bar at top of page.</li>
					<li>Server displays employers with same and similar names.</li>
					<li>Andy selects Presbyterian Healthcare from displayed list.</li>
					<li>Server returns Presbyterian Healthcare page.</li>
					<li>Andy clicks People on left navigation menu.</li>
					<li>Server returns page with listing of current employees and profile previews.</li>
					<li>Andy clicks Connect on employee named John Doe that she wants to network with.</li>
					<li>Server sends connection request to John via email and on their LinkedIn page.</li>
					<li>John receives connection notification while browsing LinkedIn site and clicks MyNetwork button at top of page.</li>
					<li>Server adds Andy to John's network and sends Andy notification that John accepted her request.</li>
				</ul>
			<a href="./index.php">Home Page</a>
	</body>
</html>