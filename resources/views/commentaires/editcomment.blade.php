<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

</head>

<body>
    
        </div><!-- /.row -->

        <section class="liste-commentaires">
            <div class="row">
                <div class="col">
                    <h3> <i class="fa-solid fa-comments"></i> Vos commentaires </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <ol class="list-group list-group-numbered">
                        <!--  -->
                    </ol>
                </div>
                <div class="col-5">
                <form action="/commentaire/updater" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $commentaire->id }}">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Présentez vous ! </label>
                        <input type="text" class="form-control @error('nom_complet_auteur') is-invalid @enderror" id="nom" name="nom_complet_auteur" value="{{ $commentaire->nom_complet_auteur }}" >
                        @error('nom_complet_auteur')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contenu" class="form-label">Laissez nous un mot ! </label>
                        <textarea class="form-control @error('contenu') is-invalid @enderror" id="contenu" name="contenu">{{ old('contenu', $commentaire->contenu) }}</textarea>
                        @error('contenu')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                </form>

                </div>
            </div>
        </section>



    </main><!-- /.container -->

    <footer class="blog-footer">

    </footer>

</body>

</html>
