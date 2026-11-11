<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$pageTitle = "Skills & Education";

require_once "includes/header.php";

$skills = $conn->query(
    "SELECT * FROM skills ORDER BY proficiency DESC"
)->fetchAll();

$education = $conn->query(
    "SELECT * FROM education ORDER BY start_year DESC"
)->fetchAll();

?>

<section class="container section-padding page-top">

    <div class="section-heading">

        <p class="accent">MY EXPERTISE</p>

        <h1>Skills & Education</h1>

        <p>My technical abilities and academic journey.</p>

    </div>

    <h3 class="mb-4">Technical Skills</h3>

    <div class="row g-4">

        <?php foreach ($skills as $skill): ?>

            <div class="col-md-6 col-lg-4">

                <div class="skill-card">

                    <div class="d-flex justify-content-between">

                        <h5><?= e($skill['skill_name']) ?></h5>

                        <span class="accent">
                            <?= e($skill['proficiency']) ?>%
                        </span>

                    </div>

                    <p class="text-secondary">
                        <?= e($skill['category']) ?>
                    </p>

                    <div class="progress">

                        <div class="progress-bar"
                             role="progressbar"
                             style="width: <?= (int)$skill['proficiency'] ?>%"
                             aria-valuenow="<?= (int)$skill['proficiency'] ?>"
                             aria-valuemin="0"
                             aria-valuemax="100">

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <h3 class="mt-5 mb-4">Education</h3>

    <?php foreach ($education as $edu): ?>

        <div class="education-card mb-3">

            <h5><?= e($edu['degree']) ?></h5>

            <h6 class="accent">
                <?= e($edu['institution']) ?>
            </h6>

            <p>
                <?= e($edu['start_year']) ?>
                -
                <?= e($edu['end_year']) ?>
            </p>

            <p>
                <?= e($edu['description']) ?>
            </p>

        </div>

    <?php endforeach; ?>

</section>

<?php require_once "includes/footer.php"; ?>