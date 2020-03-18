
<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

//Load common file which contains some html code and Meta tags ...
$this->extend('layout.html.php');
?>

<div class="container row">
    <?php
    //Show News Detail
        $title = $content['title'];
        $teaser = $content['teaser'];
        $text = $content['text'];
        $image = $content['image'];
        echo "
        <div class='NewsDiv row mt-2 col-xl-12 col-lg-12 col-md-12'>
            <div class='col-12'>
                <span href='' class='news_link'>$title</span>
            </div>
            <br>
            <img src='$image' class='NewsImgDetail mcenter col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12'>
            <br>
            <div class='col-12'>
                <div class='col-12 TeaserDetail'>$teaser</div>
                <div class='col-12 Text'>$text</div>
            </div>

        </div>

        ";

    ?>
</div>




