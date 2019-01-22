<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Conceptual Model</title>
	</head>
	<body>
		<h1>Data Design Project</h1>
			<h2>Conceptual Model</h2>
				<h3>Entities & Attributes</h3>
					<h4>Profile</h4>
						<ul>
							<li>profileId (Primary Key)</li>
							<li>profileActivationToken</li>
							<li>profileCurrentEmployer</li>
							<li>profileEducation</li>
							<li>profileEmail</li>
							<li>profileFirstName</li>
							<li>profileHash</li>
							<li>profileLastName</li>
							<li>profileLocation</li>
						</ul>
					<h4>Employer</h4>
						<ul>
							<li>employerId (Primary Key)</li>
							<li>employerFoundedDate</li>
							<li>employerIndustry</li>
							<li>employerLocation</li>
							<li>employerName</li>
							<li>employerType</li>
							<li>employerWebsite</li>
						</ul>
					<h4>Employer</h4>
						<ul>
							<li>postId (Primary Key)</li>
							<li>postProfileId (Foreign Key)</li>
							<li>postContent</li>
							<li>postDate</li>
						</ul>
					<h4>Connection</h4>
						<ul>
							<li>connectionSecondProfileId (Foreign Key)</li>
							<li>connectionProfileId (Foreign Key)</li>
							<li>connectionDate</li>
						</ul>
				<h3>Relationships</h3>
					<ul>
						<li>Many <strong>Profiles</strong> can have many <strong>Connections -(m to n)</strong></li>
						<li>Many <strong>Profiles</strong> can have many <strong>Employers -(m to n)</strong></li>
						<li>Many <strong>Connections</strong> can have many <strong>Profiles -(m to n)</strong></li>
					</ul>
				<h3>Entity Relationship Diagram</h3>
					<img src="entityRelationshipDiagram.png" alt="Entity Relationship Diagram"/>
					<p></p>
			<a href="./index.php">Home Page</a>
	</body>
</html>