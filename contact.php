<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$pageTitle = "Contact Me";

require_once "includes/header.php";

$success = "";
$error = "";

$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (
        $name === "" ||
        $email === "" ||
        $subject === "" ||
        $message === ""
    ) {

        $error = "All fields are required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Please enter a valid email address.";

    } else {

        $stmt = $conn->prepare(
            "INSERT INTO messages
            (name, email, subject, message)
            VALUES (?, ?, ?, ?)"
        );

        $stmt->execute([
            $name,
            $email,
            $subject,
            $message
        ]);

        $success = "Your message has been submitted successfully.";

        $name = "";
        $email = "";
        $subject = "";
        $message = "";

    }

}

?>

<section class="container section-padding page-top">

    <div class="section-heading">

        <p class="accent">GET IN TOUCH</p>

        <h1>Contact Me</h1>

        <p>Have a project or question? Send me a message.</p>

    </div>

    <?php if ($success): ?>

        <div class="alert alert-success">
            <?= e($success) ?>
        </div>

    <?php endif; ?>

    <?php if ($error): ?>

        <div class="alert alert-danger">
            <?= e($error) ?>
        </div>

    <?php endif; ?>

    <div class="contact-card">

        <form method="POST" id="contactForm">

            <div class="mb-3">

                <label class="form-label">Your Name</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="<?= e($name) ?>"
                       maxlength="100"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">Email Address</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       value="<?= e($email) ?>"
                       maxlength="150"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">Subject</label>

                <input type="text"
                       name="subject"
                       class="form-control"
                       value="<?= e($subject) ?>"
                       maxlength="200"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">Message</label>

                <textarea name="message"
                          class="form-control"
                          rows="5"
                          required><?= e($message) ?></textarea>

            </div>

            <button type="submit" class="btn btn-primary-custom">

                Send Message

            </button>

        </form>

    </div>

</section>

<?php require_once "includes/footer.php"; ?>