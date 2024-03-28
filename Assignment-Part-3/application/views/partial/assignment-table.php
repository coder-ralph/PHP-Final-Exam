        <table>
			<thead>
				<tr>
					<th>Assignment</th>
					<th>Sequence num</th>
					<th>Level</th>
					<th>Track</th>
				</tr>
			</thead>
			<tbody>
<?php foreach($assignments as $assignment) : ?>
			<tr>
				<td><?= $assignment['assignment_name'] ?></td>
				<td><?= $assignment['seq_num'] ?></td>
				<td><?= $assignment['level'] ?></td>
				<td><?= $assignment['track'] ?></td>
			</tr>
<?php endforeach; ?>
			</tbody>
		</table>
