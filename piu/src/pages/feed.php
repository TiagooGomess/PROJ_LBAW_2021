
<?php global $isCategory; ?>

<?php
    $role = "member";
    $pageTitle = ($isCategory ? "Category" : "Feed") . " | TasteBuds";
    $extraStyles = [ "../components/filterSortBar.css", "../components/post.css", "category.css"];
    $mainScript = "../components/filterSortBar.js";
    $extraScripts = $isCategory ?  [$mainScript, "../scripts/category.js"] : [$mainScript];
    include_once "../components/post.php";
    include_once "../components/docHeader.php"; 
    include_once "../components/nav.php"; 
    include_once "../components/trending.php"; 
?>

<h1 class="margin-from-nav content-general-margin">
    <?php 
        if ($isCategory) echo "Vegetarian";
        else echo "Feed";
    ?>
</h1>
<div class="row g-5 content-general-margin margin-to-footer">
    <div class="col-lg-9 px-0">
        <div class="mt-4<?= $isCategory ? " category-header" : " mb-3" ?>">
            <?php
                include_once "../components/filterSortBar.php";
            ?>
        </div>
        <?php if (!$isCategory) { ?><a href="<?=getRootUrl()."/pages/createRecipe.php"?>" role="button" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Create Recipe</a><?php } ?>
        <div class="search-area searched-recipes my-5">
            <?php 
                displayRecipe(true);
                displayRecipe(true);
            ?>
            <button type="button" class="btn btn-dark load-more w-25 mt-5 mx-auto">Load More</button>
        </div>
    </div>
    <div class="col-md-3 pe-0 trending-topics-recipes">
        <?php displayTrendingTopics(); ?>
        <?php displayTrendingRecipes(); ?>
    </div>
</div>
<?php 
    include_once "../components/footer.php"; 
    include_once "../components/docFooter.php";
?>

