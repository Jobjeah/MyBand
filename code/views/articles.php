<content class="wrap">
<?php
//rewrite this to a smarty template and get the result_array from the model
//=> we do not want to see a fetch_assoc in a view file!

echo '<section>';

if (count($result_list)) {
    while ($article = $result_list->fetch_assoc()) {
        echo '<article>';
        echo '<h1>' . $article['title'] . '</h1>';
        echo '<content>' . $article['content'] . '</content>';
        echo '</article>';
    }
}

echo '</section>';
?>
</content>

