<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Nettowaarde (miljoen €)</th>
                        <th scope="col">Land</th>
                        <th scope="col">Mobiel</th>
                        <th scope="col">Leeftijd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['zangeressen'] as $zangeres) : ?>
                        <tr>
                            <td><?= $zangeres->Naam; ?></td>
                            <td><?= number_format($zangeres->Nettowaarde, 0, ',', '.') . ' miljoen'; ?></td>
                            <td><?= $zangeres->Land; ?></td>
                            <td><?= $zangeres->Mobiel; ?></td>
                            <td><?= $zangeres->Leeftijd; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">Terug</a>
        </div>
        <div class="col-1"></div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
