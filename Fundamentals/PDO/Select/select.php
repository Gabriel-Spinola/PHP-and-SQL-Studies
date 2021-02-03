-------------------------------
            SELECT           
-------------------------------

<?php $pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', ''); 

    
// * = all columns
// ´samplename´ = specified column
$sql = $pdo -> prepare(
    "SELECT * FROM posts"
);

$sql -> execute();

// Get data
$info = $sql -> fetchAll();


echo "<pre>";

    print_r($info);

echo "</pre>";

echo "<br>" . "<hr>" . "<br>";

foreach ($info as $key => $value) {
    echo 'Title: ' . $value['title'] . "<br>";
    echo 'News: ' . $value['content'] . "<hr>";
}

echo "<br>" . "<hr>" . "<h3>" . ' Using "for" ' . "</h3>" . "<hr>" . "<br>";

for ($i = 0; $i < count($info); $i++) {
    echo 'Title: ' . $info[$i]['title'] . "<br>";
    echo 'News: ' . $info[$i]['content'] . "<hr>";
}

echo "<br> <br> <br>" . "<hr>";
echo '///////////////////////////////////Next Area///////////////////////////////////////';
echo "<hr>" . "<br> <br> <br>";

// * = all columns
// ´samplename´ = specified column
$sql = $pdo -> prepare(
    "SELECT * FROM posts WHERE categories_id=?"
);

$sql -> execute([1]);

// get data
$info = $sql -> fetchAll();

foreach ($info as $key => $value) {
    echo 'Title: ' . $value['title'] . "<br>";
    echo 'News: ' . $value['content'] . "<hr>";
}

echo "<br> <br> <br>" . "<hr>";
echo '///////////////////////////////////Next Area///////////////////////////////////////';
echo "<hr>" . "<br> <br> <br>";

// * = all columns
// ´samplename´ = specified column
$sql = $pdo -> prepare(
    "SELECT * FROM categories"
); $sql -> execute();

// get data
$info = $sql -> fetchAll();

foreach ($info as $key => $value) {
    $categories_id = $value['id'];

    echo "<br>" . 'Showing posts from: ' . $value['name'] . "<br> <br>";

    // Select all post with the same category_id as the categories_id from the categories table 
    $sql = $pdo -> prepare(
        "SELECT * FROM posts WHERE categories_id=$categories_id"
    ); $sql -> execute();

    $infoPosts = $sql -> fetchAll();

    foreach ($infoPosts as $key => $row) {
        echo 'Title: ' . $row['title'] . "<br>";
        echo 'News: ' . $row['content'] . "<hr>";
    }
}