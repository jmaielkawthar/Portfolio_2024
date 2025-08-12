<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image : '';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text : '';
$btn = isset($btn) ? $btn : '';
$items = isset($items) ? $items : [];
?>
<div class="ce-header-hero">
    <div class="container">
        <div class="header-hero">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 my-auto ">
                    <div class="teaser-info">
                        <?php if (!empty($headline)): ?>
                            <h1 class="headline">
                                <?php echo $headline ?>
                            </h1>
                        <?php endif; ?>
                        <?php if (!empty($subline)): ?>
                            <p class="text-with-line">
                                <?php echo $subline ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($text)): ?>
                            <p class="text"> <?php echo $text ?></p>
                        <?php endif; ?>
                        <div class="buttons-section">
                            <?php if (!empty($primaryButton)): ?>
                                <button class="primary-btn"> <?php echo $primaryButton ?></button>
                            <?php endif; ?>
                            <?php if (!empty($secondaryButton)): ?>
                                <button class="secondary-btn"> <?php echo $secondaryButton ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  col-12">
                    <div class="teaser-image">
                        <?php if (!empty($image)): ?>
                            <figure class="profile-wrapper">
                                <img src="<?php echo $image; ?>" alt="profile image" title="profile image">
                            </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>