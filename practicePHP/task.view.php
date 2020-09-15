<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task Of the Day:</h1>
        <ul>
                <li>
                    <strong>Description: </strong> <?= $task['title']; ?>
                </li>
                <li>
                    <strong>Due Date: </strong> <?= $task['due']; ?>
                </li>
                <li>
                    <strong>Assignee: </strong> <?= $task['assigned_to']; ?>
                </li>
                <li>
                    <strong>Status: </strong> <?= $task['completed'] ? '&#x2611;': '&#x2610;'; ?>
                </li>
        </ul>
</body>
</html>