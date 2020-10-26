<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editing Employee</title>
</head>


<h3>Editing Employee {{$employee->id}}</h3>

<form method="post" enctype="multipart/form-data" action ="{{route('employee.update', $employee)}}">
    @csrf
    @method("PUT")
    <div>
        <label for="name">name</label>
        <input id="name" type="text" value="{{old("name", $employee->name)}}"  name="name"/>
        <hr>
        <label for="surname">surname</label>
        <input id="surname" type="text" value="{{old("surname", $employee->surname)}}"  name="surname"/>
        <hr>
        <label for="position">position</label>
        <input id="position" type="text" value="{{old("position", $employee->position)}}"  name="position"/>
        <hr>
        <label for="phone">phone</label>
        <input id="phone" type="text" value="{{old("phone", $employee->phone)}}"  name="phone"/>
        <hr>
        <button id="edit-button" type="submit">SAVE</button>
    </div>
</form>

</html>
