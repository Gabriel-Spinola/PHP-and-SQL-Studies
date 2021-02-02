<main class="main">

    <div class="center">

        <h1><?php print $pageInfo['title'] ?></h1>

    </div><!--center-->

</main><!--main-->

<section class="contact">

    <form method="POST">
    
        <input type="text" name="name" placeholder="name" required>
        <textarea name="message" placeholder="Your Message"></textarea>
        <input type="submit" name="submit">

    </form>

</section><!--contact-->