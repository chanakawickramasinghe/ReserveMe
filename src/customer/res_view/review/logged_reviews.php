<?php
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'reserveme';
    try {
        $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }

    // Below function will convert datetime to time elapsed string.
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
        if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }

    // Res ID needs to exist, this is used to determine which reviews are for which restaurant.
    if (isset($_GET['res_id'])) {
        if (isset($_POST['customer_name'], $_POST['rating'], $_POST['content'])) {
            // Insert a new review (user submitted form)
            $stmt = $pdo->prepare('INSERT INTO reviews (res_id, customer_name, content, rating, submit_date) VALUES (?,?,?,?,NOW())');
            $stmt->execute([$_GET['res_id'], $_POST['customer_name'], $_POST['content'], $_POST['rating']]);
            exit('Your review has been submitted!');
        }

	    if (isset($_POST['name'], $_POST['rating'], $_POST['content'])) {
            // Insert a new review (user submitted form)
            $stmt = $pdo->prepare('INSERT INTO reviews (res_id, customer_name, content, rating, submit_date) VALUES (?,?,?,?,NOW())');
            $stmt->execute([$_GET['res_id'], $_POST['customer_name'], $_POST['content'], $_POST['rating']]);
            exit('Your review has been submitted!');
        }
    
        // Get all reviews by the Res ID ordered by the submit date
        $stmt = $pdo->prepare('SELECT * FROM reviews WHERE res_id = ? ORDER BY submit_date DESC');
        $stmt->execute([$_GET['res_id']]);
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Get the overall rating and total amount of reviews
        $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM reviews WHERE res_id = ?');
        $stmt->execute([$_GET['res_id']]);
        $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            exit('Please provide the Res ID.');
    }
?>


<div class="overall_rating">
    <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
    <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
    <span class="total"><?=$reviews_info['total_reviews']?> reviews</span>
</div>
<a href="#" class="write_review_btn">Add Review</a>
<div class="write_review">
    <form>
        <input name="customer_name" type="text" placeholder="Your Name" required>
        <input name="rating" type="number" min="1" max="5" placeholder="Rating (1-5)" required>
        <textarea name="content" placeholder="Write your review here..." required></textarea>
        <button type="submit">Submit Review</button>
    </form>
</div>

<?php foreach ($reviews as $review): ?>
<div class="review">
    <h3 class="name"><?=htmlspecialchars($review['customer_name'], ENT_QUOTES)?></h3>
    <div>
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>
        <!--<span class="date"><?=time_elapsed_string($review['submit_date'])?></span> HOURS AGO FUNCTION HAS TO BE LOOK AFTER FOR NOW IT DISPLAYS ONLY THE DATE TIME-->
    </div>
    <span class="date"><?=$review['submit_date']?></span>
    <p class="content"><?=htmlspecialchars($review['content'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>