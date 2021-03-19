<aside id="hero" class="hero">
    <a href="#" class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </a>
    <div class="slots equipment">
        <div data-slot="Main weapon" class="slot">
            <?php if ($hercules->getWeapon() instanceof App\Weapon) :
                include $hercules->getWeapon()->render();
            endif; ?>
        </div>
        <div data-slot="Shield" class="slot">
            <?php if ($hercules->getShield() instanceof App\Shield) :
                include $hercules->getShield()->render();
            endif; ?>
        </div>
        <div data-slot="Secondary weapon" class="slot"></div>
        <div data-slot="Head" class="slot"></div>
        <div data-slot="Ring" class="slot"></div>
        <div data-slot="Armory" class="slot"></div>
        <div data-slot="Attack" class="slot statistic"><?= $hercules->getDamage() ?></div>
        <div data-slot="Defense" class="slot statistic"><?= $hercules->getDefense() ?></div>
        <div data-slot="Life" class="slot statistic"><?= $hercules->getLife() ?></div>
        <div data-slot="Magic" class="slot statistic"></div>
    </div>
    <div class="character">
        <h2 class="name"><?= $hercules->getName() ?></h2>
        <div class="avatar">
            <?php include $hercules->getImage(); ?>
        </div>
        <p class="level">Level 1</p>
    </div>

    <div class="slots inventory">
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="slot"></div>
    </div>
</aside>