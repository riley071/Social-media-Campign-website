<?php
    if(isset($_POST['search'])){
        $keyword = $_POST['keyword'];
?>
<div class="search-results">
    <h2>Search Results</h2>
    <hr class="result-divider"/>
    <?php
        require 'conn.php';
        $query = mysqli_query($conn, "SELECT * FROM `blog` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
    <div class="result-item">
        <a href="get_blog.php?id=<?php echo $fetch['blog_id']?>"><h4><?php echo $fetch['title']?></h4></a>
        <p><?php echo substr($fetch['content'], 0, 100)?>...</p>
    </div>
    <hr class="result-divider"/>
    <?php
        }
    ?>
</div>
<?php
    }
?>
