<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets de Sites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Mes Projets de Sites</h2>

        @if ($siteGenerators->isEmpty())
            <p>Aucun projet généré pour l'instant.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom du Site</th>
                        <th>Description</th>
                        <th>Couleurs</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siteGenerators as $site)
                        <tr>
                            <td>{{ $site->site_name }}</td>
                            <td>{{ $site->site_description }}</td>
                            <td>{{ $site->site_colors }}</td>
                            <td>
                                <a href="#" class="btn btn-info">Voir</a>
                                <a href="#" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('siteGenerator.destroy', $site->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
