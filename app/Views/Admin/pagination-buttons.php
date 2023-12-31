<nav class="pagination" aria-label="<?= lang('Pager.pageNavigation') ?>">
    <?php if ($pager->hasNextPage()) : ?>
        <a class="pagination-next" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
            <span aria-hidden="true"><?= lang('Pager.next') ?></span>
        </a>
    <?php endif ?>

    <?php if ($pager->hasPreviousPage()) : ?>
        <a class="pagination-previous" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
            <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
        </a>
    <?php endif ?>

    <ul class="pagination">
        <?php foreach ($pager->links() as $link) : ?>
            <li>
                <a href="<?= $link['uri'] ?>" class="pagination-link <?= $link['active'] ? 'is-current' : '' ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>