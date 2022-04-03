<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.2/main.min.css,npm/fullcalendar@5.10.2/main.min.css">
    <script src="https://kit.fontawesome.com/4dbb07b465.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.2,npm/fullcalendar@5.10.2/main.min.js"></script>
    <title>Appointment Management System</title>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true
            });
            calendar.render();
        });

    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="../index.php" class="navbar-brand">
                <h1>APM</h1>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($username)): ?>
                <li><a href="views/edit.php"><span><i class="fas fa-user"></i></span><?php echo " $username" ?></a></li>
                <li style="margin-left: 13px"><a href="logout.php"><span><i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
            <?php else : ?>
                <li><a href="views/signup.php"><span><i class="fas fa-user"></i></span> Sign Up</a></li>
                <li style="margin-left: 13px"><a href="views/login.php"><span><i class="fas fa-sign-in-alt"></i></span> Login</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>
    
