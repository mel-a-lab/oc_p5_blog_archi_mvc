<?php include 'extensions/adminMenu.php' ?>
<section class="blog-area section" style="padding: 0px 0 40px;">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">
                        <div class="blog-info">
                            <h4 class="title" style="padding: 10px 10px 0px"><a
                                    href="post&id=<?= $post->getId() ?>"><b><?= substr($post->getChapo(), 0, 30). "..." ?></b></a>
                            </h4>
                            <hr>
                        </div>
                        <div class="blog-info">
                            <h6 class="title" style="padding: 0px 10px 10px">
                                <?= substr($post->getContent(), 0, 200). "..." ?></h6>
                            <ul class="post-footer">
                                <li><a href="admin&modifyPost&id=<?= $post->getId() ?>"><i class="ion-edit"></i></a></li>
                                <li><a href="admin&deletePost&id=<?= $post->getId() ?>"><i
                                            class="ion-android-delete"></i></a></li>
                                <li><a href="post&id=<?= $post->getId() ?>"><i class="ion-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>