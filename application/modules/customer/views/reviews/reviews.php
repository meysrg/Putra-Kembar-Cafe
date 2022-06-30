<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-5">
                    <h1>Review Saya</h1>
                </div>
                <div class="col-sm-2">
                <u><b><?php echo anchor('customer/reviews/write', 'Tulis Review Baru')?></b></u>
                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                        <li class="breadcrumb-item active">Review</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-body<?php echo ( count($reviews) > 0) ? ' p-0' : ''; ?>">
            <?php if ( count($reviews) > 0) : ?>
                <div class="table-responsive">
                    <table class="table table-striped m-0">
                        <tr class="bg-primary">
                            <th scope="col">Kode Pesanan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Review</th>
                        </tr>
                        <?php foreach ($reviews as $review) : ?>
                        <tr>
                            <th><?php echo anchor('customer/reviews/view/'. $review->id, $review->order_number); ?></th>
                            <td><?php echo get_formatted_date($review->review_date); ?></td>
                            <td><?php echo $review->review_text; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            Belum ada review yang ditulis. Silahkan tulis review baru.
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($pagination) : ?>
            <div class="card-footer">
                <?php echo $pagination; ?> 
            </div>
            <?php endif; ?>

        </div>
    </section>

</div>