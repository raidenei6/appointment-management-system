<!DOCTYPE html>
<html>
<head>
    <title>Appointments Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f4f6f8;
        }

        h2 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-data {
            text-align: center;
            padding: 20px;
            color: #999;
        }
    </style>
</head>
<body>

<h2>Appointment Schedule Table</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Appointment Date</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($appointments)) : ?>
            <?php foreach ($appointments as $appt) : ?>
                <tr>
                    <td><?= esc($appt['id']) ?></td>
                    <td><?= esc($appt['appointment_date']) ?></td>
                    <td><?= esc($appt['appointment_time']) ?></td>
                    
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="4" class="no-data">No appointments found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
