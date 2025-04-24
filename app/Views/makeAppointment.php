<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Make Appointment</h2>
    <form method="post" action="<?= base_url('/make-appointment') ?>">
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Time</label>
            <input type="time" name="time" class="form-control" required />
        </div>
        
        <button type="submit" class="btn btn-success">Book</button>
    </form>

    
</body>
</html>