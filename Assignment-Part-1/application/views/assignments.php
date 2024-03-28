<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Assignments</title>
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css')?>">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>All Assignments</h1>
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
                <?php 
                $row_count = 0; //* Initialize row counter for alternate row highlighting
                foreach ($assignments as $assignment) : ?>
                    <tr <?= $row_count++ % 2 == 0 ? 'class="highlighted-row"' : '' ?>>
                        <td><?= $assignment['assignment_name'] ?></td>
                        <td><?= $assignment['seq_num'] ?></td>
                        <td><?= $assignment['level'] ?></td>
                        <td><?= $assignment['track'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </header>
</body>
</html>
