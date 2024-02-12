<?php $imagePath = __DIR__ . '/divers/img'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../divers/css/nav.css">
</head>
<body>
    


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
        <?php
        require_once("elements/header.php");         
        ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <?php if(!empty($lastestPost)) : ?>
                <div class="col-md-12 zxtitle1 mb-2">
                    <a class="zxtik" href="./view/readPost.php?post_id=<?php echo $lastestPost['id']; ?>">
                <?php echo htmlspecialchars($lastestPost['title']); ?></a>
                </div>
                <div class="col-md-12 zximage1 mb-2">
                <a class="zxtik" href="./view/readPost.php?post_id=<?php echo $lastestPost['id']; ?>">
                <img src="./divers/img/<?php echo htmlspecialchars($lastestPost['image']); ?>" alt="Image" class="img-fluid">
            </a>
                </div>

                <div class="col-md-12 zxabstract1 mb-2">
                <a class="zxtik" href="./view/readPost.php?post_id=<?php echo $lastestPost['id']; ?>">
                <?php
                $abstract = htmlspecialchars($lastestPost['abstract']);
                echo substr($abstract, 0, 200) . (strlen($abstract) > 200 ? '...' : '');

                ?>
            </a>
                </div>
                <?php endif; ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>