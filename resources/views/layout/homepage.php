
<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= url('/') ?>/assets/css/app.css">
    <title>Game of Thrones</title>
</head>
<body>
    <header>
        <h1>Game of Thrones</h1>
        <nav>
            <ul>
                <li><a href="<?= url('/characters') ?>">Personnages</a></li>
                <li><a href="<?= url('/houses') ?>">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="wrapper">

   <ul class="characters-list">
            <?php foreach ($characters as $character): ?>
            <li class="character-card">
            <a href="<?= route('characters-item', ['id' => $character->id]); ?>">

                <div class="avatar" style="background: #e3e3e3;">
                    <img src="<?= url('/') . '/assets/img/' . $character->image; ?>" alt="<?= $character->first_name; ?>">
                </div>
                <div class="name">
                    <?= $character->first_name . ' ' . $character->last_name; ?>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>        </div>

    </main>
</body></html>
