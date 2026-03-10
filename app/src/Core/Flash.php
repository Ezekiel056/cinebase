<?php



namespace App\Core;

use App\Core\Session;


class Flash
{
    public function handleFlashMessages()
    {
        if (Session::isFlashMessages()) :
            $flash = Session::getFlashMessage(); ?>
            <div class="flash-container">
                <div class="flash-messages  <?= $flash['type'] ?>">
                    <?php foreach ($flash['messages'] as $message): ?>
                        <p><?= $message ?></p>
                    <?php endforeach ?>
                </div>
            </div>
<?php endif;
    }
}
