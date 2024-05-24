<?php
		include "../includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="accomplishments.php">Accomplishments</a></td>
					<td><?=counting("accomplishments", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="colleges.php">Colleges</a></td>
					<td><?=counting("colleges", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="educations.php">Educations</a></td>
					<td><?=counting("educations", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="experiences.php">Experiences</a></td>
					<td><?=counting("experiences", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="jobs.php">Jobs</a></td>
					<td><?=counting("jobs", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="projects.php">Projects</a></td>
					<td><?=counting("projects", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="questions.php">Questions</a></td>
					<td><?=counting("questions", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="recruiters.php">Recruiters</a></td>
					<td><?=counting("recruiters", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="students.php">Students</a></td>
					<td><?=counting("students", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="tests.php">Tests</a></td>
					<td><?=counting("tests", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="tests_attempted.php">Tests_attempted</a></td>
					<td><?=counting("tests_attempted", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
			<?php include "../includes/footer.php";?>
			