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
<?php foreach($data as $request) {?>
				<tr>
					<td><?= $request['assignment_name'] ?></td>
					<td><?= $request['seq_num'] ?></td>
					<td><?= $request['level'] ?></td>
					<td><?= $request['track'] ?></td>
				</tr>
<?php } ?>
			</tbody>
		</table>


				

		