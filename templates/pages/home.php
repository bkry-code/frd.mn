<?php $this->layout('layouts/default', compact('data', 'alias')) ?>
  <div class="constrain constrain--medium space--bottom-double space-desk-wide--bottom-triple text--center">
    <img class="rounded-image space--bottom-double" src="assets/images/jonas.jpg" alt="Jonas Friedmann" />

    <div class="fading-seperator fading-seperator--center">
      <h1 class="headline headline--upper heading-2 space--bottom"><?= $data['info']['about']['name']; ?></h1>
    </div>
    <p class="text--hero space--bottom-none space--top">
      <?= $data['info']['about']['bio']; ?> <span class="emoji">😫</span>
    </p>
    <div class="space--bottom-none space--top">
      <nav>
        <ul class="nav nav--spaced">
          <li>
            <a class="button button-- button--pill button--fade-left" href="<?= $data['info']['contact']['blog']['link']; ?>">
              <?= $data['info']['contact']['blog']['title']; ?>
            </a>
          </li>
          <li>
            <a class="button button-- button--pill" href="<?= $data['info']['contact']['twitter']['link']; ?>">
              <?= $data['info']['contact']['twitter']['title']; ?>
            </a>
          </li>
          <li>
            <a class="button button-- button--pill button--fade-right" href="<?= $data['info']['contact']['mail']['link']; ?>">
              <?= $data['info']['contact']['mail']['title']; ?>
            </a>
          </li>
        </ul>
      </nav>


    </div>
  </div>
  <div class="constrain constrain--max">
    <div class="sheet">


      <div class="headline-wrap">
        <h1 class="headline heading-3 headline--upper headline--wavy space-lap--bottom-none">Projects</h1>
      </div>

      <div class="project-table">
        <div class="project-table__row project-table__row--header">
          <div class="project-table__date">
            <h4 class="headline headline--label space--bottom-none">Date</h4>
          </div>
          <div class="project-table__title">
            <h4 class="headline headline--label space--bottom-none">Title</h4>
          </div>
          <div class="project-table__category">
            <h4 class="headline headline--label space--bottom-none">Category</h4>
          </div>
        </div>
        <?php foreach ($data['projects'] as $project): ?>
          <div class="project-table__row">
            <div class="project-table__date">
              <p class="typewriter space--bottom-none"><?= explode("-", $project['date'])[0]; ?><span class="typewriter__prefill">—</span><?= explode("-", $project['date'])[1]; ?><span class="typewriter__prefill">—</span><?= explode("-", $project['date'])[2]; ?></p>
            </div>
            <div class="project-table__title">
              <p class="typewriter space--bottom-none"><a href="<?= prepareProjectURL($project['alias']); ?>"><?= $project['name']; ?></a></p>
            </div>
            <div class="project-table__category">
              <p class="typewriter space--bottom-none"><?= $project['category']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
