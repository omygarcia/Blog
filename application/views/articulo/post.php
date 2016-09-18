<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php foreach ($contenido->result() as $row) { ?>
                <div class="post-preview">
                    <a href="<?= base_url();?>articulo/post/<?=$row->id_blog;?>">
                        <h2 class="post-title">
                            <?= $row->titulo; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= $row->descripcion; ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014<?= $row->fecha; ?></p>
                </div>
                <hr>
                <? } ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
