<?php if ($model) { ?>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <?= \yii\helpers\Html::a('<i class="mdi mdi-circle-edit-outline me-1">Edit</i>', ['update', 'id' => $model->id], ['class' => 'dropdown-item']) ?>
                        <!-- item-->
                        <?= \yii\helpers\Html::a('<i class="mdi mdi-delete-outline me-1">Delete</i>', ['delete', 'id' => $model->id], [
                            'class' => 'dropdown-item text-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="avatar-sm rounded">
                            <span class="avatar-title bg-primary-lighten h3 my-0 text-primary rounded">
                                <i class="mdi mdi-robot"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4 class="mt-0 mb-1 font-16"><?= \yii\helpers\Html::a($model->name, ['update', 'id' => $model->id], ['class' => 'dropdown-item']) ?></h4>
                        <p class="mb-0 text-muted"><i
                                    class="mdi mdi-arrow-up-bold text-success"></i> 45% This Week
                        </p>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div>

<?php } ?>
