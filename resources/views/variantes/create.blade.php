<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create variant</title>
</head>
<body>
    <h1>Create variant</h1>
    <a href="{{route('variantes.index')}}">Return </a>
    <form method="post" action="{{route('variantes.store')}}">
        @csrf
        <label>Lineage</label>
        <input type="text" name="lineage">
        <br/>
        <label>Common countries</label>
        <textarea name="common_countries" rows="6"></textarea>
        <br/>
        <label>Earliest date</label>
        <input type="text" name="earliest_date">
        <br/>
        <label>designated_number</label>
        <input type="text" name="designated_number">
        <br/>
        <label>Assignated number</label>
        <input type="text" name="assigned_number">
        <br/>
        <label>Description</label>
        <textarea name="description" rows="6" cols="30"></textarea>
        <br/>
        <label>WHO name</label>
        <input type="text" name="who_name">
        <br/>
        <button type="submit">Select new variant</button>


    </form>
</body>
</html>