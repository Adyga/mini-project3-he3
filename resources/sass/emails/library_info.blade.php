<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Librar Suppor Information</title>
</head>
<body>
<p>
    Thank you {{ ucfirst($user->name) }} for contacting our support team. A support library has been opened for you. You will be notified when a response is made by email. The details of your orders are shown below:
</p>
<p>Category: {{ $library->category }}</p>
<p>Title: {{ $library->title }}</p>
<p>Priority: {{ $library->priority }}</p>
<p>Status: {{ $library->status }}</p>

<p>
    You can view the library at any time at {{ url('librarys/'. $library->library_id) }}
</p>

</body>
</html>