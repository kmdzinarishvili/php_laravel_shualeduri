<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employees</title>

</head>
<body class="antialiased">
    <h1>Employees</h1>
    <form action="{{ route('employee_list') }}">
        <button id="redirect_button">Employees List</button>
    </form>

    @yield("content")
</body>
</html>
