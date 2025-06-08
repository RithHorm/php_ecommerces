<?php include "../phpecommerces/include/components/session.php" ?>
<?php include("../../BackEnd/config/db.php") ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include("./include/components/head.php") ?>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>

    <!-- Header Section Begin -->
    <?php include "./include/components/header.php" ?>
    <!-- Header Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <!-- Display dynamic content here -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <?php
                        try {
                            $stmt = $pdo->query("SELECT content FROM contact_contents ORDER BY id DESC LIMIT 1");
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            if ($row) {
                                echo $row['content']; // Outputs HTML from CKEditor
                            } else {
                                echo "<p>No contact info available yet.</p>";
                            }
                        } catch (PDOException $e) {
                            echo "<p>Database error: " . $e->getMessage() . "</p>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Contact form on the right -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php include "./include/components/footer.php" ?>
    <!-- Footer Section End -->

</body>

</html>
