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
        <!-- Radio button for level -->
        <form action="<?= base_url('assignments')?>" method="post">
            <label>
                <input type="radio" name="level" value="Easy"> Easy
            </label>
            <label>
                <input type="radio" name="level" value="Intermediate"> Intermediate
            </label>
            <!-- Select option for track -->
            <select name="track">
                <option value="Web Fundamentals">Web Fundamentals</option>
                <option value="PHP">PHP</option>
            </select>
            <button type="submit">Update</button>
        </form>
        <!-- Table to display assignments -->
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
