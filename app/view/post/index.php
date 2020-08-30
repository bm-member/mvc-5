<div class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="col-md-6 mb-3">
            <div class="card card-body">
                <h3>
                    <a href="<?php url("/post/show/" . $post['id']) ?>">
                        <?php echo $post['title']; ?>
                    </a>
                </h3>
                <p><?php echo $post['content']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>