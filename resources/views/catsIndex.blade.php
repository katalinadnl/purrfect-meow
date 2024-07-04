<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cats</title>
</head>
<body>
    <h1>All Cats</h1>

    <a href="{{ route('cats.create') }}">Add New Cat</a>

    <ul>
        @foreach ($cats as $cat)
            <li>
                @if ($cat->image)
                    <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->breed }}" style="width:100px;">
                @endif
                <strong>Breed:</strong> {{ $cat->breed }} <br>
                <strong>Age:</strong> {{ $cat->age }} <br>
                <strong>Gender:</strong> {{ $cat->gender }} <br>
                <strong>Issues with kids:</strong> {{ $cat->issues_with_kids ? 'Yes' : 'No' }} <br>
                <strong>Issues with other cats:</strong> {{ $cat->issues_with_other_cats ? 'Yes' : 'No' }} <br>
                <strong>Issues with dogs:</strong> {{ $cat->issues_with_dogs ? 'Yes' : 'No' }} <br>
                <strong>No issues:</strong> {{ $cat->no_issues ? 'Yes' : 'No' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
