<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$pageTitle = "My Projects";

require_once "includes/header.php";

$stmt = $conn->query(
    "SELECT * FROM projects ORDER BY created_at DESC"
    
);

$projects = $stmt->fetchAll();

?>

<section class="container section-padding page-top">

    <div class="section-heading">

        <p class="accent">MY WORK</p>

        <h1>My Projects</h1>

        <p>Some of the projects I have developed.</p>

    </div>

    <div class="mb-4">

        <input type="text"
               id="projectSearch"
               class="form-control search-box"
               placeholder="Search projects...">

    </div>

    <div class="row g-4" id="projectContainer">

        <?php foreach ($projects as $project): ?>

            <div class="col-md-6 col-lg-4 project-item">

                <div class="project-card">

                    <?php if (!empty($project['image'])): ?>

                        <img
                            src="<?= e($project['image']) ?>"
                            class="project-image"
                            alt="<?= e($project['title']) ?>"
                        >

                    <?php else: ?>

                        <div class="project-placeholder">
                            <span>PROJECT</span>
                        </div>

                    <?php endif; ?>

                    <div class="p-4">

                        <h4>
                            <?= e($project['title']) ?>
                        </h4>

                        <p>
                            <?= e($project['description']) ?>
                        </p>

                        <p class="accent">
                            <?= e($project['technologies']) ?>
                        </p>

                        <?php if (!empty($project['github_link'])): ?>

                            <a href="<?= e($project['github_link']) ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn btn-outline-light btn-sm">

                                GitHub

                            </a>

                        <?php endif; ?>

                        <?php if (!empty($project['demo_link'])): ?>

                            <a href="<?= e($project['demo_link']) ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn btn-primary-custom btn-sm">

                                Live Demo

                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

        <?php if (count($projects) === 0): ?>

            <p>No projects available yet.</p>

        <?php endif; ?>

    </div>

</section>

<?php require_once "includes/footer.php"; ?>