<?php (defined('BASEPATH')) OR exit('No direct script access allowed');  ?>

<style>
    .table td { width: 8.333%; }
    .table thead:first-child td { text-align:center; }
    /*.table tr:last-child td { text-align:right; }*/
</style>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <p><?= lang('review_report'); ?></p>
                </div>
                <div class="box-body">
                    <div class="col-sm-12">
                        <div class="calendar table-responsive">

                            <table class="table table-bordered" style="min-width:522px;">
                                <thead>
                                    <tr>
                                        <td>Store Name</td>
                                        <td>Month</td>
                                        <td>Sales (¢)</td>
                                        <td>Expenses (¢)</td>
                                        <td>Purchases (¢)</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($result)) :
                                        foreach($result as $key1 => $datum) :
                                            if($key1 == "total")
                                                continue;
                                            $counter = 1;
                                            foreach ($datum as $key2 => $data2) :
                                                if($counter == 1) :
                                    ?>
                                        <tr>
                                            <td rowspan="12"><?=$key1?></td>
                                            <td><?=$key2?></td>
                                            <td><?=$data2['sales']?></td>
                                            <td><?=$data2['expenses']?></td>
                                            <td><?=$data2['purchases']?></td>
                                            <td><?=$data2['profit_or_loss']?></td>
                                        </tr>
                                    <?php $counter++; else: ?>
                                        <tr>
                                            <td><?=$key2?></td>
                                            <td><?=$data2['sales']?></td>
                                            <td><?=$data2['expenses']?></td>
                                            <td><?=$data2['purchases']?></td>
                                            <td><?=$data2['profit_or_loss']?></td>
                                        </tr>
                                    <?php endif; endforeach; endforeach; endif; ?>
                                    <tr colspan="5">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><h4><strong>Grand Total :: <?= number_format($result['total'], 2);?></strong></h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
