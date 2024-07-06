<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau chat</title>
</head>
<body>
    <h1>Ajouter un nouveau chat</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="breed">Race</label>
            <input type="text" id="breed" name="breed" required>
        </div>
        <div>
            <label for="name">Prénom</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div>
            <label for="gender">Sexe</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div>
            <label for="issues_with_kids">Match pas les enfants</label>
            <input type="checkbox" id="issues_with_kids" name="issues_with_kids" value="1">
        </div>
        <div>
            <label for="issues_with_other_cats">Match pas avec ses congénères</label>
            <input type="checkbox" id="issues_with_other_cats" name="issues_with_other_cats" value="1">
        </div>
        <div>
            <label for="issues_with_dogs">Match pas avec les chiens</label>
            <input type="checkbox" id="issues_with_dogs" name="issues_with_dogs" value="1">
        </div>
        <div>
            <label for="no_issues">Match avec tout le monde</label>
            <input type="checkbox" id="no_issues" name="no_issues" value="1" checked>
        </div>
        <div>
            <label for="image">Portrait</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <button type="submit">Ajouter le chat</button>
        </div>
    </form>
</body>
</html>
